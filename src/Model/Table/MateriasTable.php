<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materias Model
 *
 * @property \App\Model\Table\CarrerasTable&\Cake\ORM\Association\BelongsTo $Carreras
 * @property &\Cake\ORM\Association\HasMany $Grupos
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\BelongsToMany $Solicitudes
 *
 * @method \App\Model\Entity\Materia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materia findOrCreate($search, callable $callback = null, $options = [])
 */
class MateriasTable extends Table
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

        $this->setTable('materias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Carreras', [
            'foreignKey' => 'carrera_id',
        ]);
        $this->hasMany('Grupos', [
            'foreignKey' => 'materia_id',
        ]);
        $this->belongsToMany('Solicitudes', [
            'foreignKey' => 'materia_id',
            'targetForeignKey' => 'solicitude_id',
            'joinTable' => 'solicitudes_materias',
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
            ->scalar('codigo')
            ->maxLength('codigo', 255)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        $validator
            ->integer('bloque')
            ->allowEmptyString('bloque');

        $validator
            ->scalar('creditos')
            ->maxLength('creditos', 255)
            ->allowEmptyString('creditos');

        $validator
            ->scalar('requisitos')
            ->maxLength('requisitos', 255)
            ->allowEmptyString('requisitos');

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

        return $rules;
    }
}
