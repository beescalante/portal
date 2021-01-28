<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * User Entity
 *
 * @property int $id
 * @property string $password
 * @property string $email
 * @property string $nombre
 * @property string $apellido
 * @property int $role_id
 * @property bool $status
 * @property int $telefono
 * @property string $creator
 * @property \Cake\I18n\FrozenDate $created
 * @property string|null $modifier
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property string|null $passkey
 * @property \Cake\I18n\FrozenTime|null $timeout
 * @property string $photo
 * @property string $photo_dir
 * @property bool $firstime
 * @property int $sede_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Sede $sede
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
