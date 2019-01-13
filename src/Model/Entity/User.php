<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $profile_pic
 * @property string $blood_group
 * @property string $gender
 * @property string $contact_number
 * @property string $email
 * @property string $address
 * @property string $parent_full_name
 * @property string $parent_contact_number
 * @property string $remark
 * @property int $epicenter
 * @property int $center
 * @property string $facebook
 * @property string $instagram
 * @property string $password
 * @property string $registration_location
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
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'dob' => true,
        'profile_pic' => true,
        'blood_group' => true,
        'gender' => true,
        'contact_number' => true,
        'email' => true,
        'address' => true,
        'parent_full_name' => true,
        'parent_contact_number' => true,
        'remark' => true,
        'epicenter' => true,
        'center' => true,
        'facebook' => true,
        'instagram' => true,
        'password' => true,
        'registration_location' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
