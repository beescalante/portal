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
   
    //Correos de evaluaciones
    public function evaluaciones()
    {
        //busco el periodo activo de evaluacion
        $this->loadModel('Periodos');
        $this->loadModel('Users');
        $this->loadModel('Evaluaciones');
        $periodo=$this->Periodos->get(1);

        //busco las evaluaciones
        $evaluaciones=$this->Evaluaciones->find('all',['conditions'=>['Grupos.periodo'=>$periodo->evaluacion,'status'=>0,'enviado'=>0],'contain'=>['Grupos'=>['Materias','Docentes','Carreras']]]);
        foreach ($evaluaciones as $evaluacion) {
            $users=$this->Users->find('all',['conditions'=>['Users.email'=>$evaluacion->email]]);
            if($users->count()>0){
                $email= $evaluacion->email;
                $cuatri= $evaluacion->grupo->periodo;
                $carrera= $evaluacion->grupo->carrera->nombre;
                $materia= $evaluacion->grupo->materia->nombre;
                $docente= $evaluacion->grupo->docente->nombre." ".$evaluacion->grupo->docente->apellido1;
                $horario= $evaluacion->grupo->horario;
                $this->getMailer('Pages')->send('evaluacion', [$email,$cuatri,$carrera,$materia,$docente,$horario]);

                $evaluacione=$this->Evaluaciones->get($evaluacion->id);
                $evaluacione->enviado=1;
                $this->Evaluaciones->save($evaluacione);
            }
        }
        
    }
    



}