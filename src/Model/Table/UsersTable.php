<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 50)
            ->requirePresence('middle_name', 'create')
            ->allowEmptyString('middle_name', false);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->allowEmptyDate('dob', false);

        $validator
            ->scalar('profile_pic')
            ->maxLength('profile_pic', 255)
            ->requirePresence('profile_pic', 'create')
            ->allowEmptyFile('profile_pic', false);

        $validator
            ->scalar('blood_group')
            ->maxLength('blood_group', 5)
            ->requirePresence('blood_group', 'create')
            ->allowEmptyString('blood_group', false);

        $validator
            ->scalar('gender')
            ->maxLength('gender', 5)
            ->requirePresence('gender', 'create')
            ->allowEmptyString('gender', false);

        $validator
            ->scalar('contact_number')
            ->maxLength('contact_number', 10)
            ->requirePresence('contact_number', 'create')
            ->allowEmptyString('contact_number', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->allowEmptyString('address', false);

        $validator
            ->scalar('parent_full_name')
            ->maxLength('parent_full_name', 150)
            ->requirePresence('parent_full_name', 'create')
            ->allowEmptyString('parent_full_name', false);

        $validator
            ->scalar('parent_contact_number')
            ->maxLength('parent_contact_number', 10)
            ->requirePresence('parent_contact_number', 'create')
            ->allowEmptyString('parent_contact_number', false);

        $validator
            ->scalar('remark')
            ->requirePresence('remark', 'create')
            ->allowEmptyString('remark', false);

        $validator
            ->integer('epicenter')
            ->requirePresence('epicenter', 'create')
            ->allowEmptyString('epicenter', false);

        $validator
            ->integer('center')
            ->requirePresence('center', 'create')
            ->allowEmptyString('center', false);

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->requirePresence('facebook', 'create')
            ->allowEmptyString('facebook', false);

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->requirePresence('instagram', 'create')
            ->allowEmptyString('instagram', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

        $validator
            ->scalar('registration_location')
            ->maxLength('registration_location', 255)
            ->requirePresence('registration_location', 'create')
            ->allowEmptyString('registration_location', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
