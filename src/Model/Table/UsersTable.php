<?php
namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use ArrayObject;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
      //  $this->addBehavior('Muffin/Footprint.Footprint');
        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created' => 'new',
                    'modified' => 'always'
                ],
                'Users.login' => [
                    'last_login' => 'always'
                ]
            ]
        ]);
        
	$this->hasOne('AdmissionApplicants', [
            'className' => 'AdmissionApplicants',
            'foreignKey' => 'user_id',
            'dependent' => true
        ]);
		
        $this->belongsToMany('Modules', [
            'className' => 'Modules',
            'joinTable' => 'users_modules',
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'module_id',
            'dependent' => true,
            'through' => 'UsersModules'
        ]);
        
        $this->belongsToMany('Institutes', [
            'className' => 'Institutes',
            'joinTable' => 'users_institutes',
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'institute_id',
            'dependent' => true,
            'through' => 'UsersInstitutes'
        ]);
        
        $this->belongsTo('Creator', [
            'className' => 'Users',
            'foreignKey' => 'created_by'
        ]);
        $this->belongsTo('Modifier', [
            'className' => 'Users',
            'foreignKey' => 'modified_by'
        ]);
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('name', __('Please enter a valid name.'))
            ->maxLength('name', 180, __('Name must be less than {0} characters.', 180))
            ->requirePresence('name', 'create')
            ->notEmpty('name', __('Please enter a name.'))
            ->notBlank('name', __('Please enter a valid name.'));
        
        $validator
            ->email('email', __('Please enter a valid email address.'))
            ->maxLength('email', 240, __('Email address must be less than {0} characters.', 240))
            ->requirePresence('email', 'create')
            ->notEmpty('email', __('Please enter a email address.'))
            ->add('email', 'unique', [
                'rule' => ['validateUnique', ['scope' => 'is_deleted']], 
                'provider' => 'table',
                'message' => __('Email address has already been taken. Please use a different one.')
            ]);
        
        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role', __('Please select a user role.'))
            ->notBlank('role', __('Please select a user role.'))
            ->inList('role', ['Admin', 'Editor', 'Student'], __('Please select a valid user role.'));
        
        $validator
            ->scalar('mobile', __('Please enter a valid mobile number.'))
            ->regex('mobile', '/^(\+[0-9]{1,4}[- ]{0,1})?\(?([0-9]{3})\)?[- ]{0,1}([0-9]{3})[- ]{0,1}([0-9]{4})$/i', __('Please enter a valid mobile number.'))
            ->maxLength('mobile', 21, __('Mobile number must be less than {0} characters.', 21))
			->notEmpty('mobile', __('Please enter a mobile number.'));
           // ->allowEmpty('mobile');
        
        $validator
            ->scalar('password', __('Please enter a valid password.'))
            ->lengthBetween('password', [6, 32], __('Passwords must be between 6 and 32 characters long.'))
            ->requirePresence('password', 'create')
            ->notEmpty('password', __('Please enter a password.'))
            ->notBlank('password', __('Please enter a valid password.'))
			->add('password', 'custom', [
                'rule' => [$this, 'checkCharacters'],
                'message' => 'The password must contain 1 number, 1 uppercase, 1 lowercase, and 1 special character'
            ]);
        
        $validator
            ->scalar('confirm_password', __('Please enter a valid confirm password.'))
            ->sameAs('confirm_password', 'password', __('Password and confirm password must be same.'))
            ->notEmpty('confirm_password', __('Please enter the confirm password.'));
        
        $validator
            ->scalar('current_password', __('Please enter the valid current password.'))
            ->notEmpty('current_password', 'Please enter the current password.')
            ->add('current_password', 'matchCurrent', [
                'rule' => function($entity, $options) {
                    try
                    {
                        $user = $this->get($options['data']['id'], [
                            'fields' => ['password']
                        ]);
                        
                        if($user)
                        {
                            if((new DefaultPasswordHasher)->check($entity, $user->password))
                            {
                                return true;
                            }
                        }
                        
                        return false;
                    }
                    catch(RecordNotFoundException $e)
                    {
                        return false;
                    }
                },
                'message' => 'The password you supplied is not correct.'
            ]);
        
        $validator
            ->boolean('status', __('Please select a valid status.'))
            ->requirePresence('status', 'create')
            ->notEmpty('status', __('Please select a status'));
        
        return $validator;
    }
    public function checkCharacters($password, array $context)
    {
        // number
        if (!preg_match("#[0-9]#", $password)) {
            return false;
        }
        // Uppercase
        if (!preg_match("#[A-Z]#", $password)) {
            return false;
        }
        // lowercase
        if (!preg_match("#[a-z]#", $password)) {
            return false;
        }
        // special characters
        if (!preg_match("#\W+#", $password) ) {
            return false;
        }
        return true;
    }
    public function validationForgotPassword(Validator $validator)
    {
        $validator
            ->email('email', __('Please enter a valid email address.'))
            ->maxLength('email', 240, __('Email address must be less than {0} characters.', 240))
            ->requirePresence('email')
            ->notEmpty('email', __('Please enter a email address.'));
        
        return $validator;
    }
    
    public function validationResetPassword(Validator $validator)
    {
        $validator = $this->validationDefault($validator)
            ->remove('name')
            ->remove('email', 'unique')
            ->remove('role');
        
        return $validator;
    }
    
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email', 'is_deleted']));
        $rules->add($rules->existsIn(['created_by'], 'Creator'));
        $rules->add($rules->existsIn(['modified_by'], 'Modifier'));
        
        return $rules;
    }
    
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
        if((isset($data['password']) && $data['password'] == '') && (isset($data['confirm_password']) && $data['confirm_password'] == ''))
        {
            unset($data['password']);
            unset($data['confirm_password']);
        }
    }
}
