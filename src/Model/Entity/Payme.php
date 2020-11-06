<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payme Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $acquirerid
 * @property int $idcommerce
 * @property int $purchasecurrencycode
 * @property string $language
 * @property string $programminglanguage
 * @property string $pasarela
 * @property string $wallet
 */
class Payme extends Entity
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
        'acquirerid' => true,
        'idcommerce' => true,
        'purchasecurrencycode' => true,
        'language' => true,
        'programminglanguage' => true,
        'pasarela' => true,
        'wallet' => true,
    ];
}
