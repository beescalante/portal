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

    //cada 1 minutos
    public function estudiantes()
    {
        $this->loadModel('Estados');
        $estudiantes=$this->Estados->find('all',['conditions'=>['enviado'=>0,'estado'=>3],'limit'=>4,'order'=>['id'=>'asc']]);
        foreach ($estudiantes as $estudiante) {

            $nombre=$estudiante->nombre;
            $apellido=$estudiante->apellido;
            $cedula=$estudiante->cedula;
            $correo=$estudiante->correo;
            // $correo="soporte@usl.ac.cr";
            $sede=$estudiante->sede;
            $carrera=$estudiante->carrera;
            $email=$estudiante->email;
            $clave=$estudiante->clave;


                
            $this->getMailer('Pages')->send('estudiantes', [$correo,$nombre,$apellido,$cedula,$sede,$carrera,$email,$clave]);

            $update_estudiante = $this->Estados->query();
            $update_estudiante->update()
                ->set(['enviado'=>1,'estado'=>1])
                ->where(['id' => $estudiante->id])
                ->execute();
            
            
        }
    }

    public function datos()
    {
        $this->loadModel('Estados');
        $datos=$this->Estados->find('all',['conditions'=>['enviado'=>0,'estado'=>2],'limit'=>3]);
        foreach ($datos as $dato) {

            $correo=$dato->correo;

            $this->getMailer('Pages')->send('datos', [$correo]);

            $update_edato = $this->Estados->query();
            $update_edato->update()
                ->set(['enviado'=>1])
                ->where(['id' => $dato->id])
                ->execute();
        }
    }

    public function docentes()
    {
        $this->loadModel('Docentes');
        $docentes=$this->Docentes->find('all',['conditions'=>['enviado'=>0],'limit'=>3]);
        foreach ($docentes as $docente) {

            if($docente->sede=="Alajuela"){
                $correo="soportealajuela@usl.ac.cr";
            }elseif($docente->sede=="Puntarenas"){
                $correo="soportepuntarenas@usl.ac.cr";
            }elseif($docente->sede=="San Carlos"){
                $correo="soportesancarlos@usl.ac.cr";
            }elseif($docente->sede=="San Jose" || $docente->sede=="Guapiles" || $docente->sede=="Cartago" || $docente->sede=="Puriscal"){
                $correo="soportecentral@usl.ac.cr";
            }
            // $correo="soporte@usl.ac.cr";
            $nombre=$docente->nombre." ".$docente->apellido1." ".$docente->apellido2;
            $cedula=$docente->cedula;
            $telefono=$docente->telefono;
            $sede=$docente->sede;
            $correoprofe=$docente->email;
            $this->getMailer('Pages')->send('docentes', [$correo,$nombre,$cedula,$telefono,$sede,$correoprofe]);

            $update_docente = $this->Docentes->query();
            $update_docente->update()
                ->set(['enviado'=>1])
                ->where(['id' => $docente->id])
                ->execute();
        }


    }
    



}