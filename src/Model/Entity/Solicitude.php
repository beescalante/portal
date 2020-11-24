<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitude Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $cedula
 * @property int $estudiante_id
 * @property int $carrera_id
 * @property int $sede_id
 * @property string $periodo
 * @property \Cake\I18n\FrozenDate $created
 * @property int $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Estudiante $estudiante
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Sede $sede
 * @property \App\Model\Entity\Materia[] $materias
 */
class Solicitude extends Entity
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
