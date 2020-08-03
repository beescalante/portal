<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carreras Model
 *
 * @property \App\Model\Table\EscuelasTable&\Cake\ORM\Association\BelongsTo $Escuelas
 * @property \App\Model\Table\EstudiantesTable&\Cake\ORM\Association\HasMany $Estudiantes
 * @property \App\Model\Table\MateriasTable&\Cake\ORM\Association\HasMany $Materias
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\HasMany $Solicitudes
 * @property \App\Model\Table\SedesTable&\Cake\ORM\Association\BelongsToMany $Sedes
 *
 * @method \App\Model\Entity\Carrera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrera newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carrera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrera|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrera saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrera[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrera findOrCreate($search, callable $callback = null, $options = [])
 */
class CarrerasTable extends Table
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

        $this->setTable('carreras');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('Escuelas', [
            'foreignKey' => 'escuela_id',
        ]);
        $this->hasMany('Estudiantes', [
            'foreignKey' => 'carrera_id',
        ]);
        $this->hasMany('Materias', [
            'foreignKey' => 'carrera_id',
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'carrera_id',
        ]);
        $this->belongsToMany('Sedes', [
            'foreignKey' => 'carrera_id',
            'targetForeignKey' => 'sede_id',
            'joinTable' => 'carreras_sedes',
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
            ->scalar('carrera')
            ->maxLength('carrera', 255)
            ->requirePresence('carrera', 'create')
            ->notEmptyString('carrera');

        $validator
            ->scalar('grado')
            ->maxLength('grado', 255)
            ->allowEmptyString('grado');

        $validator
            ->integer('bloques')
            ->allowEmptyString('bloques');

        $validator
            ->scalar('director')
            ->maxLength('director', 255)
            ->allowEmptyString('director');

        $validator
            ->scalar('apcarrera')
            ->maxLength('apcarrera', 255)
            ->allowEmptyString('apcarrera');

        $validator
            ->scalar('applan')
            ->maxLength('applan', 255)
            ->allowEmptyString('applan');

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
        $rules->add($rules->existsIn(['escuela_id'], 'Escuelas'));

        return $rules;
    }
}
