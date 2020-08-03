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
        $sedes = $this->Cobros->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('cobro', 'sedes'));
    }


}
