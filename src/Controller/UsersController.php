<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Sedes'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Sedes'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $sedes = $this->Users->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'sedes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $sedes = $this->Users->Sedes->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'sedes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login
     *
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if($this->request->is('post'))
        {
            $user =$this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect(['action'=>'home']);
            }
            else
            {
                $this->Flash->error('Datos inválidos. Intente nuevamente.', ['key' =>'auth']);
            }
        }
        if ($this->Auth->user())
        {
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }

    /**
     * Logout
     *
     */
    public function logout()
    {
        
        return $this->redirect($this->Auth->logout());
    }


    /**
     * Inicio
     *
     */
    public function home()
    {
        
       
    }

    /**
     * Cambiar contraseña 
     *
     */
    public function cambiarcontrasena()
    {
        $user =$this->Users->get($this->Auth->user('id')); 
        if (!empty($this->request->getData())) { 
            $user = $this->Users->patchEntity($user, [
                'old_password'  => $this->request->getData(['old_password']),
                'password'      => $this->request->getData(['password1']),
                'password1'     => $this->request->getData(['password1']),
                'password2'     => $this->request->getData(['password2'])
                ],
                ['validate' => 'password']
            );
            if ($this->Users->save($user)) { 
                    
                $this->Flash->success('Su contraseña ha sido modificada correctamente.'); 
                    
                return $this->redirect(['controller'=>'Users','action' => 'cambiarcontrasena']);
            }else {    
                $this->Flash->error('Su contraseña no pudo ser modificada. Por favor, intente más tarde.');   
            } 
        } 
        $this->set('user',$user);
    }

    /**
     * Perfil: Editar
     *
     */
    public function miperfil()
    {
        
       
    }
}
