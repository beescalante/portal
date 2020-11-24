<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Docente Entity
 *
 * @property int $id
 * @property string|null $cedula
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property string|null $emailp
 * @property string $emailu
 * @property string|null $telefono
 * @property int|null $grado_id
 * @property int $sede_id
 *
 * @property \App\Model\Entity\Grado $grado
 * @property \App\Model\Entity\Sede $sede
 * @property \App\Model\Entity\User[] $users
 */
class Docente extends Entity
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
