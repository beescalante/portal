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
   

    
}
