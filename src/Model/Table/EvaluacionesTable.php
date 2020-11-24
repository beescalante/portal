<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evaluaciones Model
 *
 * @property \App\Model\Table\GruposTable&\Cake\ORM\Association\BelongsTo $Grupos
 *
 * @method \App\Model\Entity\Evaluacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evaluacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evaluacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evaluacione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evaluacione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evaluacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EvaluacionesTable extends Table
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

        $this->setTable('evaluaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->boolean('p1')
            ->allowEmptyString('p1');

        $validator
            ->boolean('p2')
            ->allowEmptyString('p2');

        $validator
            ->integer('p3')
            ->allowEmptyString('p3');

        $validator
            ->integer('p4')
            ->allowEmptyString('p4');

        $validator
            ->integer('p5')
            ->allowEmptyString('p5');

        $validator
            ->integer('p6')
            ->allowEmptyString('p6');

        $validator
            ->integer('p7')
            ->allowEmptyString('p7');

        $validator
            ->integer('p8')
            ->allowEmptyString('p8');

        $validator
            ->integer('p9')
            ->allowEmptyString('p9');

        $validator
            ->integer('p10')
            ->allowEmptyString('p10');

        $validator
            ->integer('p11')
            ->allowEmptyString('p11');

        $validator
            ->integer('p12')
            ->allowEmptyString('p12');

        $validator
            ->integer('p13')
            ->allowEmptyString('p13');

        $validator
            ->integer('p14')
            ->allowEmptyString('p14');

        $validator
            ->integer('p15')
            ->allowEmptyString('p15');

        $validator
            ->integer('p16')
            ->allowEmptyString('p16');

        $validator
            ->integer('p17')
            ->allowEmptyString('p17');

        $validator
            ->integer('p18')
            ->allowEmptyString('p18');

        $validator
            ->integer('p19')
            ->allowEmptyString('p19');

        $validator
            ->integer('p20')
            ->allowEmptyString('p20');

        $validator
            ->integer('p21')
            ->allowEmptyString('p21');

        $validator
            ->integer('p22')
            ->allowEmptyString('p22');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 2000)
            ->allowEmptyString('comentario');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->boolean('enviado')
            ->allowEmptyString('enviado');

        $validator
            ->date('contestado')
            ->allowEmptyDate('contestado');

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
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));

        return $rules;
    }
}
