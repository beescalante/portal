<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evaluaciones Controller
 *
 * @property \App\Model\Table\EvaluacionesTable $Evaluaciones
 *
 * @method \App\Model\Entity\Evaluacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EvaluacionesController extends AppController
{
    
    /*PERMISOLOGIA DE USUARIOS*/
    public function isAuthorized($user){
        //estudiante rol=3
        if(isset($user['role_id']) and $user['role_id'] === 3)
        {
            if(in_array($this->request->action, ['index','edit']))
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
        $evaluaciones = $this->Evaluaciones->find('all',['conditions'=>['Evaluaciones.email'=>$this->Auth->user('email'),'Evaluaciones.status'=>0],'contain'=>['Grupos'=>['Materias','Docentes']]]);
        if($evaluaciones->count()>0){
            
        }else{
            return $this->redirect(['controller'=>'Users','action' => 'home']);
        }

        $this->loadModel('Estudiantes');
        $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

        $this->loadModel('Cobros');
        $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);

        $this->set(compact('evaluaciones','pagos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluacione = $this->Evaluaciones->get($id, [
            'contain' => ['Grupos'=>['Materias','Docentes','Sedes','Carreras']]
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluacione = $this->Evaluaciones->patchEntity($evaluacione, $this->request->getData());
            $evaluacione->contestado=date('Y-m-d');
            $evaluacione->status=1;
            if ($this->Evaluaciones->save($evaluacione)) {
                $this->Flash->success(__('¡Gracias por contestar esta evaluacion!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Hubo un error con su evaluación. Por favor, intente más tarde.'));
        }
        $grupos = $this->Evaluaciones->Grupos->find('list', ['limit' => 200]);

        $this->loadModel('Estudiantes');
        $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

        $this->loadModel('Cobros');
        $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);

        $this->set(compact('evaluacione', 'grupos','pagos'));
    }
}
