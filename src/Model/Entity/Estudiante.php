<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estudiante Entity
 *
 * @property int $id
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property string $emailp
 * @property string $emailu
 * @property string $telefono
 * @property string $sexo
 * @property int $nacionalidade_id
 * @property \Cake\I18n\FrozenDate $nacimiento
 * @property int $sede_id
 * @property int $carrera_id
 * @property bool $conape
 * @property string $condicion
 *
 * @property \App\Model\Entity\Nacionalidade $nacionalidade
 * @property \App\Model\Entity\Sede $sede
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 * @property \App\Model\Entity\User[] $users
 */
class Estudiante extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
