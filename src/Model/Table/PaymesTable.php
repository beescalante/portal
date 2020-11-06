<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paymes Model
 *
 * @method \App\Model\Entity\Payme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payme findOrCreate($search, callable $callback = null, $options = [])
 */
class PaymesTable extends Table
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

        $this->setTable('paymes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('acquirerid')
            ->requirePresence('acquirerid', 'create')
            ->notEmptyString('acquirerid');

        $validator
            ->integer('idcommerce')
            ->requirePresence('idcommerce', 'create')
            ->notEmptyString('idcommerce');

        $validator
            ->integer('purchasecurrencycode')
            ->requirePresence('purchasecurrencycode', 'create')
            ->notEmptyString('purchasecurrencycode');

        $validator
            ->scalar('language')
            ->maxLength('language', 20)
            ->requirePresence('language', 'create')
            ->notEmptyString('language');

        $validator
            ->scalar('programminglanguage')
            ->maxLength('programminglanguage', 20)
            ->requirePresence('programminglanguage', 'create')
            ->notEmptyString('programminglanguage');

        $validator
            ->scalar('pasarela')
            ->maxLength('pasarela', 500)
            ->requirePresence('pasarela', 'create')
            ->notEmptyString('pasarela');

        $validator
            ->scalar('wallet')
            ->maxLength('wallet', 500)
            ->requirePresence('wallet', 'create')
            ->notEmptyString('wallet');

        return $validator;
    }
}
