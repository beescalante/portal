<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carrera Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $grado
 * @property int|null $bloques
 * @property string|null $director
 * @property int|null $escuela_id
 * @property string|null $apcarrera
 * @property string|null $applan
 *
 * @property \App\Model\Entity\Escuela $escuela
 * @property \App\Model\Entity\Estudiante[] $estudiantes
 * @property \App\Model\Entity\Materia[] $materias
 * @property \App\Model\Entity\Solicitude[] $solicitudes
 * @property \App\Model\Entity\Sede[] $sedes
 */
class Carrera extends Entity
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
