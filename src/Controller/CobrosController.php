<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Cobros Controller
 *
 * @property \App\Model\Table\CobrosTable $Cobros
 *
 * @method \App\Model\Entity\Cobro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CobrosController extends AppController
{
    use MailerAwareTrait;
    
    /*PERMISOLOGIA DE USUARIOS*/
    public function isAuthorized($user){
        //estudiante rol=3
        if(isset($user['role_id']) and $user['role_id'] === 3)
        {
            if(in_array($this->request->action, ['index','view','reportar','tarjeta']))
            {
                return true;
            }else{
                $this->Flash->error(__('Disculpe, usted no está autorizado para realizar esta acción.'));
            }
        }
        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->loadModel('Estudiantes');
        $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);

        $cobros = $this->Cobros->find('all',['conditions'=>['Cobros.cedula'=>$estudiante->cedula],'contain'=>['Sedes'],'order'=>['status'=>'asc']]);
        if($this->Auth->user('role_id')==3){
            $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);
            
            $this->set(compact('pagos'));
        }
        $this->set(compact('cobros'));
    }

    /**
     * View method
     *
     * @param string|null $id Cobro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cobro = $this->Cobros->get($id, [
            'contain' => ['Sedes'],
        ]);
        if($this->Auth->user('role_id')==3){
            $this->loadModel('Estudiantes');
            $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);

            if($cobro->status==1 && $cobro->tipo=="Tarjeta"){
                $this->loadModel('Paymes');
                //SEDES
                if($cobro->sede_id==1 && $cobro->diffe==1){
                    $payme = $this->Paymes->get(2);
                }
                //MARIROCA
                elseif($cobro->sede_id==1 && $cobro->diffe==2){
                    $payme = $this->Paymes->get(1);
                }
                elseif($cobro->sede_id==5){
                    $payme = $this->Paymes->get(1);
                }
                elseif($cobro->sede_id==7){
                    $payme = $this->Paymes->get(1);
                }
                //CARTAGO
                elseif($cobro->sede_id==3){
                    $payme = $this->Paymes->get(3);
                }
                //PUNTARENAS
                elseif($cobro->sede_id==4){
                    $payme = $this->Paymes->get(4);
                }
                $purchaseOperationNumber = str_pad($id, 9, "0", STR_PAD_LEFT);
                $purchaseVerification = openssl_digest($payme->acquirerid . $payme->idcommerce . $purchaseOperationNumber . $payme->pasarela, 'sha512');

                $url = 'https://integracion.alignetsac.com/VPOS2/rest/operationAcquirer/consulte';

                $dataRest = '{"idAcquirer":"'.$payme->acquirerid.'","idCommerce":"'.$payme->idcommerce.'","operationNumber":"'.$purchaseOperationNumber.'","purchaseVerification":"'.$purchaseVerification.'"}';

                $header = array('Content-Type: application/json');
            
                //Consumo del servicio Rest
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_POSTFIELDS, $dataRest);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($curl);
                $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                curl_close($curl);
                
                //Imprimir respuesta
                //echo 'Respuesta: ' . $response;
                //errorCode
                //
                print_r($response);
                $jsonData = json_decode($response,true);
                $errorCode= $jsonData['errorCode'];
                
                if($errorCode=='7003' || $errorCode=='8005'){

                }else{
                    if($jsonData['result']==1 || $jsonData['result']==2 || $jsonData['result']==4 || $jsonData['result']==6 || $jsonData['result']==9 || $jsonData['result']==10 || $jsonData['result']==11 || $jsonData['result']==13 || $jsonData['result']==14){
                        $status=4;
                    }elseif($jsonData['result']==0 || $jsonData['result']==7 || $jsonData['result']==8 || $jsonData['result']==12 || $jsonData['result']==15 || $jsonData['result']==16){
                        $status=3;
                    }elseif($jsonData['result']==3 || $jsonData['result']==5){
                        $status=2;
                    }

                    $cobro->fechapago=date('Y-m-d H:i:s');
                    $cobro->status=$status;
                    $cobro->shippingfirstname= $jsonData['shippingFirstName'];
                    $cobro->shippinglastname= $jsonData['shippingLastName'];
                    $cobro->shippingemail= $jsonData['shippingEMail'];
                    $cobro->shippingaddress= $jsonData['shippingAddress'];
                    $cobro->shippingzip= $jsonData['shippingZIP'];
                    $cobro->shippingcity= $jsonData['shippingCity'];
                    $cobro->shippingstate= $jsonData['shippingState'];
                    $cobro->authorizationcode= $jsonData['authorizationCode'];
                    $cobro->cardnumber= $jsonData['cardNumber'];
                    $cobro->cardtype= $jsonData['cardType'];
                    $cobro->errorcode= $jsonData['errorCode'];
                    $cobro->errormessage= $jsonData['errorMessage'];
                    $cobro->result= $jsonData['result'];
                    if ($this->Cobros->save($cobro)) {
                        $this->Flash->success(__('El pago #'.$id.' actualizado.'));

                        return $this->redirect(['action' => 'view',$id]);
                    }
                }

            }
            
            $this->set(compact('pagos'));
        }

        $this->set('cobro', $cobro);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function reportar($id = null)
    {
        $cobro = $this->Cobros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobro = $this->Cobros->patchEntity($cobro, $this->request->getData());
            $cobro->fechapago=date('Y-m-d H:i:s');
            $cobro->status=3;
            if ($this->Cobros->save($cobro)) {
                $this->Flash->success(__('El pago #'.$cobro->id.' se ha registrado exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El pago #'.$cobro->id.' no se ha registrado. Por favor, intente más tarde.'));
        }

        if($this->Auth->user('role_id')==3){
            $this->loadModel('Estudiantes');
            $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);
            
            $this->set(compact('pagos'));
        }

        $sedes = $this->Cobros->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('cobro', 'sedes'));
    }


    public function tarjeta($id = null)
    {
        $cobro = $this->Cobros->get($id, [
            'contain' => [],
        ]);
        if($cobro->status==1){
            if ($this->request->is(['patch', 'post', 'put'])) {
                $cobro = $this->Cobros->patchEntity($cobro, $this->request->getData());
                $cobro->fechapago=date('Y-m-d H:i:s');
                $cobro->status=3;
                if ($this->Cobros->save($cobro)) {
                    $this->Flash->success(__('El pago #'.$cobro->id.' se ha registrado exitosamente.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('El pago #'.$cobro->id.' no se ha registrado. Por favor, intente más tarde.'));
            }

            if($this->Auth->user('role_id')==3){
                $this->loadModel('Estudiantes');
                $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

                $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);
                
                $this->set(compact('pagos'));
            }

            $this->loadModel('Paymes');
            //SEDES
            if($cobro->sede_id==1 && $cobro->diffe==1){
                $payme = $this->Paymes->get(1);
            }
            //MARIROCA
            elseif($cobro->sede_id==1 && $cobro->diffe==2){
                $payme = $this->Paymes->get(2);
            }
            //CARTAGO
            elseif($cobro->sede_id==3){
                $payme = $this->Paymes->get(3);
            }
            //PUNTARENAS
            elseif($cobro->sede_id==4){
                $payme = $this->Paymes->get(4);
            }

            
        }else{
            return $this->redirect(['action' => 'view',$id]);
        }
        $this->set(compact('cobro', 'payme'));
    }


}
