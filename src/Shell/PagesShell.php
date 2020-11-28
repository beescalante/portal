<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Mailer\MailerAwareTrait;
use Cake\I18n\Time;

/**
 * Productos shell command.
 */
class PagesShell extends Shell
{

    use MailerAwareTrait;
   
    //Correos de evaluaciones
    public function evaluaciones()
    {
        //busco el periodo activo de evaluacion
        $this->loadModel('Periodos');
        $this->loadModel('Users');
        $this->loadModel('Evaluaciones');
        $periodo=$this->Periodos->get(1);

        //busco las evaluaciones
        $evaluaciones=$this->Evaluaciones->find('all',['conditions'=>['Grupos.periodo'=>$periodo->evaluacion,'status'=>0,'enviado'=>0],'contain'=>['Grupos'=>['Materias','Docentes','Carreras']]]);
        foreach ($evaluaciones as $evaluacion) {
            $users=$this->Users->find('all',['conditions'=>['Users.email'=>$evaluacion->email]]);
            if($users->count()>0){
                $email= $evaluacion->email;
                $cuatri= $evaluacion->grupo->periodo;
                $carrera= $evaluacion->grupo->carrera->nombre;
                $materia= $evaluacion->grupo->materia->nombre;
                $docente= $evaluacion->grupo->docente->nombre." ".$evaluacion->grupo->docente->apellido1;
                $horario= $evaluacion->grupo->horario;
                $this->getMailer('Pages')->send('evaluacion', [$email,$cuatri,$carrera,$materia,$docente,$horario]);

                $evaluacione=$this->Evaluaciones->get($evaluacion->id);
                $evaluacione->enviado=1;
                $this->Evaluaciones->save($evaluacione);
            }
        }
        
    }

    //actualizacion de pagos tarjeta
    public function pagolinks()
    {
        $this->loadModel('Cobros');
        $cobros=$this->Cobros->find('all',['conditions'=>['link'=>1,'status'=>1,'enviado'=>1,'tipo'=>'Tarjeta']]);
        foreach ($cobros as $cobro) {
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
                //CARTAGO
                elseif($cobro->sede_id==3){
                    $payme = $this->Paymes->get(3);
                }
                //PUNTARENAS
                elseif($cobro->sede_id==4){
                    $payme = $this->Paymes->get(4);
                }
                $purchaseOperationNumber = str_pad($cobro->id, 9, "0", STR_PAD_LEFT);
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
                //print_r($response);
                $jsonData = json_decode($response,true);
                $errorCode= $jsonData['errorCode'];
                
                if($errorCode=='7003' || $errorCode=='8005' || $jsonData['result']==0 || $jsonData['result']==7 || $jsonData['result']==8 || $jsonData['result']==12 || $jsonData['result']==15 || $jsonData['result']==16){

                }else{
                    if($jsonData['result']==1 || $jsonData['result']==2 || $jsonData['result']==4 || $jsonData['result']==6 || $jsonData['result']==9 || $jsonData['result']==10 || $jsonData['result']==11 || $jsonData['result']==13 || $jsonData['result']==14){
                        $status=4;
                        $cardnumber= 0;
                    }elseif($jsonData['result']==0 || $jsonData['result']==7 || $jsonData['result']==8 || $jsonData['result']==12 || $jsonData['result']==15 || $jsonData['result']==16){
                        $status=3;
                        $cardnumber= 0;
                    }elseif($jsonData['result']==3 || $jsonData['result']==5){
                        $status=2;
                        $cardnumber= $jsonData['cardNumber'];
                    }

                    $cobro->fechapago=date('Y-m-d H:i:s');
                    $cobro->status=$status;
                    $cobro->passkey=0;
                    $cobro->shippingfirstname= $jsonData['shippingFirstName'];
                    $cobro->shippinglastname= $jsonData['shippingLastName'];
                    $cobro->shippingemail= $jsonData['shippingEMail'];
                    $cobro->shippingaddress= $jsonData['shippingAddress'];
                    $cobro->shippingzip= $jsonData['shippingZIP'];
                    $cobro->shippingcity= $jsonData['shippingCity'];
                    $cobro->shippingstate= $jsonData['shippingState'];
                    $cobro->authorizationcode= $jsonData['authorizationCode'];
                    $cobro->cardnumber= $cardnumber;
                    $cobro->cardtype= $jsonData['cardType'];
                    $cobro->errorcode= $jsonData['errorCode'];
                    $cobro->errormessage= $jsonData['errorMessage'];
                    $cobro->result= $jsonData['result'];
                    $this->Cobros->save($cobro);
                }

            }
        }
    }

}