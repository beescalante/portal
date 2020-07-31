<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cobros Controller
 *
 * @property \App\Model\Table\CobrosTable $Cobros
 *
 * @method \App\Model\Entity\Cobro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CobrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sedes'],
        ];
        $cobros = $this->paginate($this->Cobros);

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
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cobro = $this->Cobros->newEntity();
        if ($this->request->is('post')) {
            $cobro = $this->Cobros->patchEntity($cobro, $this->request->getData());
            if ($this->Cobros->save($cobro)) {
                $this->Flash->success(__('The cobro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobro could not be saved. Please, try again.'));
        }
        $sedes = $this->Cobros->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('cobro', 'sedes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cobro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cobro = $this->Cobros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cobro = $this->Cobros->patchEntity($cobro, $this->request->getData());
            if ($this->Cobros->save($cobro)) {
                $this->Flash->success(__('The cobro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cobro could not be saved. Please, try again.'));
        }
        $sedes = $this->Cobros->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('cobro', 'sedes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cobro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cobro = $this->Cobros->get($id);
        if ($this->Cobros->delete($cobro)) {
            $this->Flash->success(__('The cobro has been deleted.'));
        } else {
            $this->Flash->error(__('The cobro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
