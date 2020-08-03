<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cobrosdl Entity
 *
 * @property int $id
 * @property string $cedula
 * @property string $concepto
 * @property float $subtotal
 * @property float $impuesto
 * @property float $descuento
 * @property float $total
 * @property float $pagar
 * @property int $status
 * @property int $sede_id
 * @property string|null $referencia
 * @property \Cake\I18n\FrozenDate $created
 * @property string $usuario
 * @property string $tipo
 * @property string|null $img
 * @property string|null $img_dir
 * @property \Cake\I18n\FrozenTime|null $fechapago
 *
 * @property \App\Model\Entity\Sede $sede
 */
class Cobrosdl extends Entity
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
        'pagar' => true,
        'status' => true,
        'sede_id' => true,
        'referencia' => true,
        'created' => true,
        'usuario' => true,
        'tipo' => true,
        'img' => true,
        'img_dir' => true,
        'fechapago' => true,
        'sede' => true,
    ];
}
