<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluacione Entity
 *
 * @property int $id
 * @property int $grupo_id
 * @property string $email
 * @property bool|null $p1
 * @property bool|null $p2
 * @property int|null $p3
 * @property int|null $p4
 * @property int|null $p5
 * @property int|null $p6
 * @property int|null $p7
 * @property int|null $p8
 * @property int|null $p9
 * @property int|null $p10
 * @property int|null $p11
 * @property int|null $p12
 * @property int|null $p13
 * @property int|null $p14
 * @property int|null $p15
 * @property int|null $p16
 * @property int|null $p17
 * @property int|null $p18
 * @property int|null $p19
 * @property int|null $p20
 * @property int|null $p21
 * @property int|null $p22
 * @property string|null $comentario
 * @property bool|null $status
 * @property \Cake\I18n\FrozenDate|null $created
 * @property bool|null $enviado
 * @property \Cake\I18n\FrozenDate|null $contestado
 *
 * @property \App\Model\Entity\Grupo $grupo
 */
class Evaluacione extends Entity
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
