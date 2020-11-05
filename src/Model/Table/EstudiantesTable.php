<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estudiantes Model
 *
 * @property \App\Model\Table\NacionalidadesTable&\Cake\ORM\Association\BelongsTo $Nacionalidades
 * @property \App\Model\Table\SedesTable&\Cake\ORM\Association\BelongsTo $Sedes
 * @property \App\Model\Table\CarrerasTable&\Cake\ORM\Association\BelongsTo $Carreras
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\HasMany $Solicitudes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Estudiante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estudiante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estudiante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudiante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudiante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante findOrCreate($search, callable $callback = null, $options = [])
 */
class EstudiantesTable extends Table
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

        $this->setTable('estudiantes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Nacionalidades', [
            'foreignKey' => 'nacionalidade_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sedes', [
            'foreignKey' => 'sede_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Carreras', [
            'foreignKey' => 'carrera_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'estudiante_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'estudiante_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido1')
            ->maxLength('apellido1', 255)
            ->requirePresence('apellido1', 'create')
            ->notEmptyString('apellido1');

        $validator
            ->scalar('apellido2')
            ->maxLength('apellido2', 255)
            ->allowEmptyString('apellido2');

        $validator
            ->scalar('emailp')
            ->maxLength('emailp', 255)
            ->requirePresence('emailp', 'create')
            ->notEmptyString('emailp');

        $validator
            ->scalar('emailu')
            ->maxLength('emailu', 255)
            ->requirePresence('emailu', 'create')
            ->notEmptyString('emailu');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 255)
            ->requirePresence('sexo', 'create')
            ->notEmptyString('sexo');

        $validator
            ->date('nacimiento')
            ->requirePresence('nacimiento', 'create')
            ->notEmptyDate('nacimiento');

        $validator
            ->boolean('conape')
            ->requirePresence('conape', 'create')
            ->notEmptyString('conape');

        $validator
            ->scalar('condicion')
            ->maxLength('condicion', 255)
            ->requirePresence('condicion', 'create')
            ->notEmptyString('condicion');

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
        $rules->add($rules->isUnique(['cedula'],'Esta cédula ya existe.'));
        $rules->add($rules->existsIn(['nacionalidade_id'], 'Nacionalidades'));
        $rules->add($rules->existsIn(['sede_id'], 'Sedes'));
        $rules->add($rules->existsIn(['carrera_id'], 'Carreras'));

        return $rules;
    }
}
