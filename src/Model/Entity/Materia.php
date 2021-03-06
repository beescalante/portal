<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materia Entity
 *
 * @property int $id
 * @property string|null $codigo
 * @property string|null $nombre
 * @property int|null $bloque
 * @property string|null $creditos
 * @property int|null $carrera_id
 * @property string|null $requisitos
 *
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 */
class Materia extends Entity
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
