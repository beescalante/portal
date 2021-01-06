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

    public function contrasena($email,$nombre,$apellido,$url)
    {
        $this->setTo($email)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['email'=>$email,'nombre'=>$nombre,'apellido'=>$apellido,'url'=>$url])
        ->setSubject(sprintf('Reestablecer Contraseña'))
        ->viewBuilder()
            ->setTemplate('contrasena')
            ->setLayout('pages');
    }

    public function solicitud($correos,$id,$cedula,$periodo,$carrera,$sede,$materias)
    {
        $this->setTo($correos)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['id'=>$id,'cedula'=>$cedula,'periodo'=>$periodo,'carrera'=>$carrera,'sede'=>$sede,'materias'=>$materias])
        ->setSubject(sprintf('Solicitud de Matrícula #'.$id.': Estudiante Regular/Activo'))
        ->viewBuilder()
            ->setTemplate('solicitud')
            ->setLayout('pages');
    }

    public function evaluacion($email,$cuatri,$carrera,$materia,$docente,$horario)
    {
        $this->setTo($email)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['email'=>$email,'cuatri'=>$cuatri,'carrera'=>$carrera,'materia'=>$materia,'docente'=>$docente,'horario'=>$horario])
        ->setSubject(sprintf('Evaluación Docente Pendiente: '.$cuatri.' - '.$materia))
        ->viewBuilder()
            ->setTemplate('evaluacion')
            ->setLayout('pages');
    }

    public function recordatorios($email)
    {
        $this->setTo($email)
        ->setProfile('usl')
        ->setEmailFormat('html')
        ->setViewVars(['email'=>$email])
        ->setSubject(sprintf('Recordatorio: Evaluaciones de Docente Pendiente'))
        ->viewBuilder()
            ->setTemplate('recordatorios')
            ->setLayout('pages');
    }
   

    
}
