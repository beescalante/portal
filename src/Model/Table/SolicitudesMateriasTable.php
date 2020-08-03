<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicitudesMaterias Model
 *
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\BelongsTo $Solicitudes
 * @property \App\Model\Table\MateriasTable&\Cake\ORM\Association\BelongsTo $Materias
 *
 * @method \App\Model\Entity\SolicitudesMateria get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicitudesMateria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicitudesMateria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesMateria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitudesMateria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitudesMateria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesMateria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitudesMateria findOrCreate($search, callable $callback = null, $options = [])
 */
class SolicitudesMateriasTable extends Table
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

        $this->setTable('solicitudes_materias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Solicitudes', [
            'foreignKey' => 'solicitude_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Materias', [
            'foreignKey' => 'materia_id',
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
        $rules->add($rules->existsIn(['solicitude_id'], 'Solicitudes'));
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));

        return $rules;
    }
}
