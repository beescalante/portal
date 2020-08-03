<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sedes Model
 *
 * @property \App\Model\Table\CobrosTable&\Cake\ORM\Association\HasMany $Cobros
 * @property \App\Model\Table\EstudiantesTable&\Cake\ORM\Association\HasMany $Estudiantes
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\HasMany $Solicitudes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\CarrerasTable&\Cake\ORM\Association\BelongsToMany $Carreras
 *
 * @method \App\Model\Entity\Sede get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sede newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sede[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sede|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sede saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sede patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sede[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sede findOrCreate($search, callable $callback = null, $options = [])
 */
class SedesTable extends Table
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

        $this->setTable('sedes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Cobros', [
            'foreignKey' => 'sede_id',
        ]);
        $this->hasMany('Estudiantes', [
            'foreignKey' => 'sede_id',
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'sede_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'sede_id',
        ]);
        $this->belongsToMany('Carreras', [
            'foreignKey' => 'sede_id',
            'targetForeignKey' => 'carrera_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('horario')
            ->maxLength('horario', 255)
            ->allowEmptyString('horario');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 255)
            ->allowEmptyString('correo');

        return $validator;
    }
}
