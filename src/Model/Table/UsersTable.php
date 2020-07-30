<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\SedesTable&\Cake\ORM\Association\BelongsTo $Sedes
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sedes', [
            'foreignKey' => 'sede_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Estudiantes', [
            'foreignKey' => 'estudiante_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Docentes', [
            'foreignKey' => 'docente_id',
            'joinType' => 'INNER',
        ]);
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('password', [ 'length' => [ 'rule' => ['minLength', 6], 'message' => 'La contraseña debe tener de 6 a 12 caracteres.']])
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 255)
            ->requirePresence('apellido', 'create')
            ->notEmptyString('apellido');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('creator')
            ->maxLength('creator', 255)
            ->requirePresence('creator', 'create')
            ->notEmptyString('creator');

        $validator
            ->scalar('modifier')
            ->maxLength('modifier', 255)
            ->allowEmptyString('modifier');

        $validator
            ->scalar('passkey')
            ->maxLength('passkey', 255)
            ->allowEmptyString('passkey');

        $validator
            ->dateTime('timeout')
            ->allowEmptyDateTime('timeout');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->requirePresence('photo_dir', 'create')
            ->notEmptyString('photo_dir');

        $validator
            ->boolean('firstime')
            ->notEmptyString('firstime');

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
        $rules->add($rules->isUnique(['email'],'Este correo ya se encuentra registrado.'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['sede_id'], 'Sedes'));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id','role_id','status','email','nombre','apellido','photo','photo_dir','firstime','sede_id','estudiante_id','docente_id'])
            ->where(['Users.status'=> 1]);
        return $query;
    }

    
    public function recoverPassword($id)
    {
        $user = $this->get($id);
        return $user->password;
    }

    public function validationPassword(Validator $validator )
    {

        $validator
            ->add('old_password','custom',['rule'=>  function($value, $context){
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message'=>'La contraseña anterior no es correcta.'])
                ->notEmpty('old_password');
        $validator
            ->add('password1', ['length' => ['rule' => ['minLength', 6],'message' => 'La contraseña debe tener de 6 a 12 caracteres.']])
            ->add('password1',['match'=>['rule'=> ['compareWith','password2'],'message'=>'Las contraseñas no coinciden.']])
            ->notEmpty('password1');
        $validator
            ->add('password2', ['length' => ['rule' => ['minLength', 6],'message' => 'La contraseña debe tener de 6 a 12 caracteres.']])
            ->add('password2',['match'=>['rule'=> ['compareWith','password1'],'message'=>'Las contraseñas no coinciden.']])
            ->notEmpty('password2');
        return $validator;
    }
}
