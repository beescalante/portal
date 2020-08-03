<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CarrerasSedes Model
 *
 * @property \App\Model\Table\CarrerasTable&\Cake\ORM\Association\BelongsTo $Carreras
 * @property \App\Model\Table\SedesTable&\Cake\ORM\Association\BelongsTo $Sedes
 *
 * @method \App\Model\Entity\CarrerasSede get($primaryKey, $options = [])
 * @method \App\Model\Entity\CarrerasSede newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CarrerasSede[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CarrerasSede|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarrerasSede saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CarrerasSede patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CarrerasSede[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CarrerasSede findOrCreate($search, callable $callback = null, $options = [])
 */
class CarrerasSedesTable extends Table
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

        $this->setTable('carreras_sedes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Carreras', [
            'foreignKey' => 'carrera_id',
        ]);
        $this->belongsTo('Sedes', [
            'foreignKey' => 'sede_id',
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
            ->scalar('coordinador')
            ->maxLength('coordinador', 255)
            ->allowEmptyString('coordinador');

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
        $rules->add($rules->existsIn(['carrera_id'], 'Carreras'));
        $rules->add($rules->existsIn(['sede_id'], 'Sedes'));

        return $rules;
    }
}
