<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Solicitudes Controller
 *
 * @property \App\Model\Table\SolicitudesTable $Solicitudes
 *
 * @method \App\Model\Entity\Solicitude[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudesController extends AppController
{
    use MailerAwareTrait;
    /*PERMISOLOGIA DE USUARIOS*/
    public function isAuthorized($user){
        //estudiante rol=3
        if(isset($user['role_id']) and $user['role_id'] === 3)
        {
            if(in_array($this->request->action, ['index','add','selectmaterias']))
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

        $solicitudes = $this->Solicitudes->find('all',['conditions'=>['Solicitudes.user_id'=>$this->Auth->user('id'),'Solicitudes.estudiante_id'=>$this->Auth->user('estudiante_id')],'contain'=>['Sedes','Carreras','Materias'],'order'=>['Solicitudes.id'=>'desc']]);

        $this->set(compact('solicitudes'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->loadModel('Estudiantes');
        $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);

        $this->loadModel('Periodos');
        $periodos=$this->Periodos->find('all',['conditions'=>['status'=>1]]);
        foreach ($periodos as $period) {
            $periodo=$this->Periodos->get($period->id);
        }


        $solicitude = $this->Solicitudes->newEntity();
        if ($this->request->is('post')) {
            $solicitude = $this->Solicitudes->patchEntity($solicitude, $this->request->getData());
            $solicitude->user_id=$this->Auth->user('id');
            $solicitude->estudiante_id=$this->Auth->user('estudiante_id');
            $solicitude->cedula=$estudiante->cedula;
            $solicitude->sede_id=$estudiante->sede_id;
            $solicitude->periodo=$periodo->nombre;
            if ($this->Solicitudes->save($solicitude)) {
                //guardar datos en estudiantes
                $estudiante->telefono=$this->request->getData('telefono');
                $estudiante->emailp=$this->request->getData('emailp');
                $this->Estudiantes->save($estudiante);

                //correo por sede
                if($solicitude->sede_id==1){
                    if($solicitude->carrera_id==7 || $solicitude->carrera_id==13 || $solicitude->carrera_id==24){
                        $correos="plataformacentral1@usl.ac.cr";
                    }else{
                        $correos="plataformacentral2@usl.ac.cr";
                    }
                    
                }elseif($solicitude->sede_id==2){
                    //alajuela
                    $correos="plataformaalajuela@usl.ac.cr";
                }
                elseif($solicitude->sede_id==3){
                    //cartago
                    $correos="plataformacartago@usl.ac.cr";
                }
                elseif($solicitude->sede_id==4){
                    //puntarenas
                    $correos="plataformapuntarenas@usl.ac.cr";
                }
                elseif($solicitude->sede_id==5){
                    //puriscal
                    $correos="plataformapuriscal@usl.ac.cr";
                }
                elseif($solicitude->sede_id==6){
                    //san carlos
                    $correos="plataformasancarlos@usl.ac.cr";
                }
                elseif($solicitude->sede_id==7){
                    //guapiles
                    $correos="plataformaguapiles@usl.ac.cr";
                }
                $this->loadModel('SolicitudesMaterias');
                $materias=$this->SolicitudesMaterias->find('all',['conditions'=>['SolicitudesMaterias.solicitude_id'=>$solicitude->id],'contain'=>['Materias']]);
                $this->loadModel('Carreras');
                $carrera=$this->Carreras->get($solicitude->carrera_id);
                $this->loadModel('Sedes');
                $sede=$this->Sedes->get($solicitude->sede_id);
                $this->getMailer('Pages')->send('solicitud', [$correos,$solicitude->id,$solicitude->cedula,$solicitude->periodo,$carrera->nombre,$sede->nombre,$materias]);
                $this->Flash->success(__('Su solicitud de matrícula ha sido realizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Su solicitud de matrícula no pudo ser realizada. Por favor, intente más tarde.'));
        }

        $this->loadModel('Carreras');
        $sede_id=$estudiante->sede_id;
        $carreras = $this->Carreras->find('list', ['limit' => 200,'order'=>['Carreras.nombre'=>'asc']]);
        $carreras->innerJoinWith('Sedes',function($q) use($sede_id){return $q->where(['Sedes.id' => $sede_id]);});

        $this->set(compact('solicitude', 'estudiante', 'carreras','periodo'));
    }


    public function selectmaterias($id = null) {
        $this->viewBuilder()->setLayout('ajax');
        $id = $this->request->getData('carreraid');
        $this->loadModel('Materias');
        $materias = $this->Materias->find('all', ['limit' => 200,'keyField' => 'id','valueField' => 'nombre','conditions'=>['carrera_id' => $id],'order' => ['Materias.id' => 'asc'],'contain'=>['Carreras']]);

        $this->loadModel('Carreras');
        $carrera=$this->Carreras->get($id);
        $this->set(compact('materias','carrera'));  
    }
}
