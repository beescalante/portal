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
        //busco las evaluaciones
        //busco si existe el correo en users 
        //envio el correo 
        //marco como enviado
    }
    



}