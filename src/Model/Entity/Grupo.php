<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property int $id
 * @property int $sede_id
 * @property string $codigo
 * @property int $materia_id
 * @property int $carrera_id
 * @property string $periodo
 * @property string $ceduladoc
 * @property int $docente_id
 * @property string $horario
 * @property \Cake\I18n\FrozenDate $created
 * @property string|null $equipo
 *
 * @property \App\Model\Entity\Sede $sede
 * @property \App\Model\Entity\Materia $materia
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Docente $docente
 * @property \App\Model\Entity\Evaluacione[] $evaluaciones
 */
class Grupo extends Entity
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
