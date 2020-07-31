<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cobros Model
 *
 * @property \App\Model\Table\SedesTable&\Cake\ORM\Association\BelongsTo $Sedes
 *
 * @method \App\Model\Entity\Cobro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cobro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cobro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cobro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cobro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cobro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cobro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cobro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CobrosTable extends Table
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

        $this->setTable('cobros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sedes', [
            'foreignKey' => 'sede_id',
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
            ->scalar('cedula')
            ->maxLength('cedula', 255)
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('concepto')
            ->maxLength('concepto', 255)
            ->requirePresence('concepto', 'create')
            ->notEmptyString('concepto');

        $validator
            ->numeric('subtotal')
            ->requirePresence('subtotal', 'create')
            ->notEmptyString('subtotal');

        $validator
            ->numeric('impuesto')
            ->requirePresence('impuesto', 'create')
            ->notEmptyString('impuesto');

        $validator
            ->numeric('descuento')
            ->requirePresence('descuento', 'create')
            ->notEmptyString('descuento');

        $validator
            ->numeric('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 255)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 255)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario');

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
        $rules->add($rules->existsIn(['sede_id'], 'Sedes'));

        return $rules;
    }
}
