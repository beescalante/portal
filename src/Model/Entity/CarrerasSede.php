<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CarrerasSede Entity
 *
 * @property int $id
 * @property int|null $carrera_id
 * @property int|null $sede_id
 * @property string|null $coordinador
 *
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Sede $sede
 */
class CarrerasSede extends Entity
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
        'carrera_id' => true,
        'sede_id' => true,
        'coordinador' => true,
        'carrera' => true,
        'sede' => true,
    ];
}
