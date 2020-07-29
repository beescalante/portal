<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\MailerAwareTrait;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    Use MailerAwareTrait;
    public function home()
    {
        $this->loadModel('Estudiantes');
        $this->loadModel('Carreras');
        $estudiante = $this->Estudiantes->newEntity();
        if ($this->request->is('post')) {
            $estudiante = $this->Estudiantes->patchEntity($estudiante, $this->request->getData());

            $nombre=$this->request->getData('nombre');
            $apellido1=$this->request->getData('apellido1');
            $apellido2=$this->request->getData('apellido2');
            $email=$this->request->getData('email');
            $cedula=$this->request->getData('identificacion');

            if(strpos($nombre, 'https://') || strpos($nombre, 'http://') || strpos($nombre, '/') || strpos($nombre, '.') || strpos($apellido1, 'http://') || strpos($apellido1, '/') || strpos($apellido1, '.') || strpos($apellido2, 'http://') || strpos($apellido2, '/') || strpos($apellido2, '.')){
                $this->Flash->error(__('¡Oops! Parece que hay datos errados. Intente nuevamente.'));
            }else{
                $estudiantes=$this->Estudiantes->find('all',['conditions'=>['Estudiantes.identificacion'=>$cedula]]);
                if($estudiantes->count()>0){
                    $this->Flash->error(__('Este estudiante ya se encuentra registrado. Por favor, revise sus datos e intente nuevamente.'));
                }else{
                    if ($this->Estudiantes->save($estudiante)) {
                        return $this->redirect(['controller' => 'Pages','action'=>'gracias',$estudiante->id]);
                    }
                }
            }
        }
        $carreras = $this->Carreras->find('all', ['limit' => 200,'order' => ['nombre' => 'asc']]);
        $this->set(compact('estudiante','carreras'));
    }

    public function gracias($id=null)
    {
        $this->loadModel('Estudiantes');
        $estudiante=$this->Estudiantes->get($id);
        $this->set(compact('estudiante'));
    }

    public function consulta()
    {
        if ($this->request->is('post')) {
            $cedula=$this->request->getData('cedula');
            $this->loadModel('Estados');
            $estados=$this->Estados->find('all',['conditions'=>['Estados.cedula'=>$cedula],'limit'=>1]);
            if($estados->count()>0){
                foreach ($estados as $estado) {
                   $id=$estado->id;
                }
                return $this->redirect(['controller' => 'Pages','action'=>'resultado',$id]);
            }else{
                $this->Flash->error(__('Este número de cédula no se encuentra registrado en el formulario. Debe registrarse en este enlace: https://usantalucia.ac.cr/'));
            }
        }
        
    }
    public function resultado($id = null)
    {
        $this->loadModel('Estados');
        $estudiante=$this->Estados->get($id);
        $this->set(compact('estudiante'));
    }

    public function docentes()
    {
        $this->loadModel('Docentes');
        $docente = $this->Docentes->newEntity();
        if ($this->request->is('post')) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());

            $nombre=$this->request->getData('nombre');
            $apellido1=$this->request->getData('apellido1');
            $apellido2=$this->request->getData('apellido2');
            $cedula=$this->request->getData('cedula');

            if(strpos($nombre, 'https://') || strpos($nombre, 'http://') || strpos($nombre, '/') || strpos($nombre, '.') || strpos($apellido1, 'http://') || strpos($apellido1, '/') || strpos($apellido1, '.') || strpos($apellido2, 'http://') || strpos($apellido2, '/') || strpos($apellido2, '.')){
                $this->Flash->error(__('¡Oops! Parece que hay datos errados. Intente nuevamente.'));
            }else{
                $docentes=$this->Docentes->find('all',['conditions'=>['Docentes.cedula'=>$cedula]]);
                if($docentes->count()>0){
                    $this->Flash->error(__('Esta cédula ya se encuentra registrada. Por favor, revise sus datos e intente nuevamente.'));
                }else{
                    if ($this->Docentes->save($docente)) {



                        return $this->redirect(['controller' => 'Pages','action'=>'graciasdoc',$docente->id]);

                        

                    }
                }
            }
        }
        $this->set(compact('docente'));
    }

    public function graciasdoc($id=null)
    {
        $this->loadModel('Docentes');
        $docente=$this->Docentes->get($id);
        $this->set(compact('docente'));
    }
}
