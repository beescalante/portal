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
        $this->Auth->allow(['pedircontrasena','recuperarcontrasena','login','logout','linkpago']);
    }

    /*PERMISOLOGIA DE USUARIOS*/
    public function isAuthorized($user){
        //estudiante rol=3
        if(isset($user['role_id']) and $user['role_id'] === 3)
        {
            if(in_array($this->request->action, ['login','logout','home','cambiarcontrasena','miperfil','pedircontrasena','recuperarcontrasena']))
            {
                return true;
            }else{
                $this->Flash->error(__('Disculpe, usted no está autorizado para realizar esta acción.'));
            }
        }
        if(isset($user['role_id']) and $user['role_id'] === 2)
        {
            if(in_array($this->request->action, ['login','logout','home','cambiarcontrasenad','miperfild','pedircontrasena','recuperarcontrasena']))
            {
                return true;
            }else{
                $this->Flash->error(__('Disculpe, usted no está autorizado para realizar esta acción.'));
            }
        }
        return parent::isAuthorized($user);
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
        if($this->Auth->user('role_id')==3){
            $this->loadModel('Estudiantes');
            $student=$this->Estudiantes->get($this->Auth->user('estudiante_id'));

            $this->loadModel('Cobros');
            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$student->cedula,'status'=>1]]);
            
            $this->set(compact('pagos'));
        }
    }

    /**
     * Cambiar contraseña Estudiantes
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

        if($this->Auth->user('role_id')==3){
            $this->loadModel('Estudiantes');
            $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);

            $this->loadModel('Cobros');
            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$estudiante->cedula,'status'=>1]]);
            
            $this->set(compact('pagos'));
            $this->set(compact('estudiante'));
        }
        
    }

    /**
     * Cambiar contraseña Docentes
     *
     */
    public function cambiarcontrasenad()
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

        if($this->Auth->user('role_id')==2){
            $this->loadModel('Docentes');
            $docente=$this->Docentes->get($this->Auth->user('docente_id'),['contain'=>['Sedes','Grados']]);
        }
        $this->set(compact('docente'));
    }

    /**
     * Perfil Estudiante: Editar
     *
     */
    public function miperfil()
    {
        if($this->Auth->user('role_id')==3){
            $this->loadModel('Estudiantes');
            $estudiante=$this->Estudiantes->get($this->Auth->user('estudiante_id'),['contain'=>['Sedes','Carreras','Nacionalidades']]);
            $user=$this->Users->get($this->Auth->user('id'));
            
            if ($this->request->is(['patch', 'post', 'put'])) {
                $estudiante = $this->Estudiantes->patchEntity($estudiante, $this->request->getData());
                if ($this->Estudiantes->save($estudiante)) {
                    $user->nombre=$estudiante->nombre;
                    $user->apellido=$estudiante->apellido1;
                    $this->Users->save($user);
                    $this->Flash->success(__('Sus datos han sido modificados con éxito. El nombre en su usuario cambiará en su próximo inicio de sesión.'));

                    return $this->redirect(['action' => 'miperfil']);
                }
                $this->Flash->error(__('Sus datos no han podido ser modificados. Por favor, intente más tarde.'));
            }

            
            $this->loadModel('Cobros');
            $pagos=$this->Cobros->find('all',['conditions'=>['cedula'=>$estudiante->cedula,'status'=>1]]);
            
            $this->set(compact('pagos'));

        }
        $this->set(compact('estudiante'));
       
    }

    /**
     * Perfil Docente: Editar
     *
     */
    public function miperfild()
    {
        if($this->Auth->user('role_id')==2){
            $this->loadModel('Docentes');
            $docente=$this->Docentes->get($this->Auth->user('docente_id'),['contain'=>['Sedes','Grados']]);
            $user=$this->Users->get($this->Auth->user('id'));
            
            if ($this->request->is(['patch', 'post', 'put'])) {
                $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
                if ($this->Docentes->save($docente)) {
                    $user->nombre=$docente->nombre;
                    $user->apellido=$docente->apellido1;
                    $this->Users->save($user);
                    $this->Flash->success(__('Sus datos han sido modificados con éxito. El nombre en su usuario cambiará en su próximo inicio de sesión.'));

                    return $this->redirect(['action' => 'miperfild']);
                }
                $this->Flash->error(__('Sus datos no han podido ser modificados. Por favor, intente más tarde.'));
            }
            $grados= $this->Docentes->Grados->find('list',['limit'=>250]);

        }
        $this->set(compact('docente','grados'));
       
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
                $this->Flash->error('Este correo institucional no se encuentra registrado. Por favor, comuníquese con su sede indicando su dirección de correo institucional.');
            } else {
                $passkey = uniqid();
                $url = Router::url(['controller' => 'Users', 'action' => 'recuperarcontrasena'], TRUE) . '/' . $passkey;
                $timeout = time() + DAY;
                if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user_id])){
                    
                    $this->getMailer('Pages')->send('contrasena', [$email,$nombre,$apellido,$url]);
                    $this->Flash->success(__('Hemos enviado un mensaje de correo a su dirección de correo institucional con el enlace/url para recuperar su contraseña. Por favor, revise en su cuenta Outlook.'));
                } 
                else {
                    $this->Flash->error('Error en la recuperación de contraseña');
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
                        $this->Flash->success(__($user->nombre.', su contraseña ha sido recuperada.'));
                        return $this->redirect(['action' => 'login']);
                    } else {
                        $this->Flash->error(__($user->nombre.', su contraseña no pudo ser recuperada. Por favor, revise sus datos e intente nuevamente.'));
                    }
                }
            } else {
                $this->Flash->error('Enlace inválido o expirado. Por favor, verifique que la dirección de correo institucional sea correcta o intente solicitar su contraseña nuevamente.');
                $this->redirect(['action' => 'pedircontrasena']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }


    //link de pago 
    public function linkpago($passkey = null) {
        $this->viewBuilder()->setLayout('externald');
        $this->loadModel('Cobros');
        if ($passkey) {
            $cobros = $this->Cobros->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time(),'status'=>1],'limit'=>1]);
            if($cobros->count()>0){
                foreach ($cobros as $cobrod) {
                    $cobro = $this->Cobros->get($cobrod->id);
                }
                $purchaseOperationNumber = str_pad($cobro->id, 9, "0", STR_PAD_LEFT);
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

                $purchaseVerification = openssl_digest($payme->acquirerid . $payme->idcommerce . $purchaseOperationNumber . $cobro->pagar . $payme->purchasecurrencycode . $payme->pasarela, 'sha512');
            }else{
                $this->Flash->error('Enlace inválido o expirado. Por favor, comuníquese con el personal de plataforma plataforma de su sede.');
                $this->redirect(['action' => 'login']);
            }
            
        }else {
            $this->redirect('/');
        }
        $this->set(compact('cobro', 'payme','purchaseVerification','purchaseOperationNumber'));

    }

    /**
     * Inicio
     *
     */
    public function condiciones()
    {
        
       
    }
}
