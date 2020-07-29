<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Pages mailer.
 */
class PagesMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Pages';

    public function docentes($correo,$nombre,$cedula,$telefono,$sede,$correoprofe)
    {
    	$this->setTo($correo)
    	->setProfile('usl')
    	->setEmailFormat('html')
    	->setViewVars(['correo'=>$correo,'nombre'=>$nombre,'cedula'=>$cedula,'telefono'=>$telefono,'sede'=>$sede,'correoprofe'=>$correoprofe])
    	->setSubject(sprintf('Notificación: Crear Cuenta de Correo Docente'))
        ->viewBuilder()
            ->setTemplate('docentes')
            ->setLayout('pages');
    }
    public function estudiantes($correo,$nombre,$apellido,$cedula,$sede,$carrera,$email,$clave)
    {
        $this->setTo($correo)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['correo'=>$correo,'nombre'=>$nombre,'apellido'=>$apellido,'cedula'=>$cedula,'sede'=>$sede,'carrera'=>$carrera,'email'=>$email,'clave'=>$clave])
        ->setSubject(sprintf('Notificación: Correo Institucional'))
        ->viewBuilder()
            ->setTemplate('estudiantes')
            ->setLayout('pages');
    }
    public function datos($correo)
    {
        $this->setTo($correo)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['correo'=>$correo])
        ->setSubject(sprintf('Notificación: Verificación de Datos'))
        ->viewBuilder()
            ->setTemplate('datos')
            ->setLayout('pages');
    }

    
}
