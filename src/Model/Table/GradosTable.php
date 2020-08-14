<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grados Model
 *
 * @property \App\Model\Table\DocentesTable&\Cake\ORM\Association\HasMany $Docentes
 *
 * @method \App\Model\Entity\Grado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grado findOrCreate($search, callable $callback = null, $options = [])
 */
class GradosTable extends Table
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

        $this->setTable('grados');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Docentes', [
            'foreignKey' => 'grado_id',
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
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('abrev')
            ->maxLength('abrev', 255)
            ->requirePresence('abrev', 'create')
            ->notEmptyString('abrev');

        return $validator;
    }
}
