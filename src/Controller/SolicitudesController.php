<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitudes Controller
 *
 * @property \App\Model\Table\SolicitudesTable $Solicitudes
 *
 * @method \App\Model\Entity\Solicitude[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Estudiantes', 'Carreras', 'Sedes'],
        ];
        $solicitudes = $this->paginate($this->Solicitudes);

        $this->set(compact('solicitudes'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitude = $this->Solicitudes->get($id, [
            'contain' => ['Users', 'Estudiantes', 'Carreras', 'Sedes', 'Materias'],
        ]);

        $this->set('solicitude', $solicitude);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitude = $this->Solicitudes->newEntity();
        if ($this->request->is('post')) {
            $solicitude = $this->Solicitudes->patchEntity($solicitude, $this->request->getData());
            if ($this->Solicitudes->save($solicitude)) {
                $this->Flash->success(__('The solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitude could not be saved. Please, try again.'));
        }
        $users = $this->Solicitudes->Users->find('list', ['limit' => 200]);
        $estudiantes = $this->Solicitudes->Estudiantes->find('list', ['limit' => 200]);
        $carreras = $this->Solicitudes->Carreras->find('list', ['limit' => 200]);
        $sedes = $this->Solicitudes->Sedes->find('list', ['limit' => 200]);
        $materias = $this->Solicitudes->Materias->find('list', ['limit' => 200]);
        $this->set(compact('solicitude', 'users', 'estudiantes', 'carreras', 'sedes', 'materias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitude = $this->Solicitudes->get($id, [
            'contain' => ['Materias'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitude = $this->Solicitudes->patchEntity($solicitude, $this->request->getData());
            if ($this->Solicitudes->save($solicitude)) {
                $this->Flash->success(__('The solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitude could not be saved. Please, try again.'));
        }
        $users = $this->Solicitudes->Users->find('list', ['limit' => 200]);
        $estudiantes = $this->Solicitudes->Estudiantes->find('list', ['limit' => 200]);
        $carreras = $this->Solicitudes->Carreras->find('list', ['limit' => 200]);
        $sedes = $this->Solicitudes->Sedes->find('list', ['limit' => 200]);
        $materias = $this->Solicitudes->Materias->find('list', ['limit' => 200]);
        $this->set(compact('solicitude', 'users', 'estudiantes', 'carreras', 'sedes', 'materias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitude = $this->Solicitudes->get($id);
        if ($this->Solicitudes->delete($solicitude)) {
            $this->Flash->success(__('The solicitude has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
