<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cobro Entity
 *
 * @property int $id
 * @property string $cedula
 * @property string $concepto
 * @property float $subtotal
 * @property float $impuesto
 * @property float $descuento
 * @property float $total
 * @property int $status
 * @property int $sede_id
 * @property string|null $referencia
 * @property \Cake\I18n\FrozenDate $created
 * @property string $usuario
 *
 * @property \App\Model\Entity\Sede $sede
 */
class Cobro extends Entity
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
        'cedula' => true,
        'concepto' => true,
        'subtotal' => true,
        'impuesto' => true,
        'descuento' => true,
        'total' => true,
        'status' => true,
        'sede_id' => true,
        'referencia' => true,
        'created' => true,
        'usuario' => true,
        'sede' => true,
    ];
}
