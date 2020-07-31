<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    
    use MailerAwareTrait;
    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['pedircontrasena','recuperarcontrasena','login']);
    }

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
                    
                $this->logout();
            }else {    
                $this->Flash->error('Su contraseña no pudo ser modificada. Por favor, intente más tarde.');   
            } 
        }
        $this->set('user',$user);

        if($this->Auth->user('role_id')==1){
            $this->loadModel('Estudiantes');
            $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);
        }
        $this->set(compact('estudiante'));
    }

    /**
     * Perfil: Editar
     *
     */
    public function miperfil()
    {
        if($this->Auth->user('role_id')==1){
            $this->loadModel('Estudiantes');
            $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);
            
            if ($this->request->is(['patch', 'post', 'put'])) {
                $estudiante = $this->Estudiantes->patchEntity($estudiante, $this->request->getData());
                if ($this->Estudiantes->save($estudiante)) {
                    $this->Flash->success(__('Sus datos han sido modificados con éxito.'));

                    return $this->redirect(['action' => 'miperfil']);
                }
                $this->Flash->error(__('Sus datos no han podido ser modificados. Por favor, intente más tarde.'));
            }

        }
        $this->set(compact('estudiante'));
       
    }

    /**
     * Envio de correo para recuperar contraseña
     *
     */
    public function pedircontrasena()
    {
        $this->viewBuilder()->setLayout('external');
        if ($this->request->is('post')) 
        {
            $users = $this->Users->find('all',['conditions'=>['Users.email'=>$this->request->getData('email')]]);

            foreach ($users as $user) {
                $email=$user->email;
                $nombre=$user->nombre;
                $apellido=$user->apellido;
                $user_id=$user->id;
            }
            if ($users->count()==0) 
            {
                $this->Flash->error('El correo electrónico solicitado no se encuentra registrado. Por favor, intente nuevamente.');
            } else {
                $passkey = uniqid();
                $url = Router::url(['controller' => 'Users', 'action' => 'recuperarcontrasena'], TRUE) . '/' . $passkey;
                $timeout = time() + DAY;
                if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user_id])){
                    
                    $this->getMailer('Pages')->send('contrasena', [$email,$nombre,$apellido,$url]);
                    $this->Flash->success(__('Hemos enviado un mensaje de correo con el enlace/url para recuperar su contraseña. Revise su carpeta de Spam o correo no deseado.'));
                } 
                else {
                    $this->Flash->error('Error en reestablecimiento de contraseña');
                }
            }
        }
    }

    /**
     * Resetear contraseña para recuperar
     *
     */
    public function recuperarcontrasena($passkey = null) {
        $this->viewBuilder()->setLayout('external');
        if ($passkey) {
            $query = $this->Users->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
            if ($user) {
                if (!empty($this->request->getData())) {
                    // Clear passkey and timeout
                    // $this->request->getData('passkey')=null;
                    // $this->request->getData('timeout')=null;
                    $user = $this->Users->patchEntity($user, [
                        'password'      => $this->request->getData('password1'),
                        'password1'     => $this->request->getData('password1'),
                        'password2'     => $this->request->getData('password2')
                    ],
                    ['validate' => 'password']);

                    if ($this->Users->save($user)) {
                        $this->Flash->success(__($user->nombre.', su contraseña ha sido reestablecida.'));
                    } else {
                        $this->Flash->error(__($user->nombre.', su contraseña no pudo ser reestablecida. Por favor, intente nuevamente.'));
                    }
                }
            } else {
                $this->Flash->error('Enlace inválido o expirado. Por favor, revise su correo o intente reestablecer nuevamente.');
                $this->redirect(['action' => 'pedircontrasena']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }
}
