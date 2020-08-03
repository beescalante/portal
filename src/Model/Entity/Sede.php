<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sede Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $horario
 * @property string|null $telefono
 * @property string|null $direccion
 * @property string|null $correo
 *
 * @property \App\Model\Entity\Cobro[] $cobros
 * @property \App\Model\Entity\Estudiante[] $estudiantes
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Carrera[] $carreras
 */
class Sede extends Entity
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
        'nombre' => true,
        'horario' => true,
        'telefono' => true,
        'direccion' => true,
        'correo' => true,
        'cobros' => true,
        'estudiantes' => true,
        'solicitudes' => true,
        'users' => true,
        'carreras' => true,
    ];
}
