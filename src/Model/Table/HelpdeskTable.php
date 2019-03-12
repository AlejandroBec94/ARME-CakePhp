<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Helpdesk Model
 *
 * @method \App\Model\Entity\Helpdesk get($primaryKey, $options = [])
 * @method \App\Model\Entity\Helpdesk newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Helpdesk[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Helpdesk|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Helpdesk|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Helpdesk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Helpdesk[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Helpdesk findOrCreate($search, callable $callback = null, $options = [])
 */
class HelpdeskTable extends Table
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

        $this->setTable('helpdesk');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('QuestionID')
            ->maxLength('QuestionID', 100)
            ->requirePresence('QuestionID', 'create')
            ->allowEmptyString('QuestionID', false)
            ->add('QuestionID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('QuestionName')
            ->maxLength('QuestionName', 250)
            ->requirePresence('QuestionName', 'create')
            ->allowEmptyString('QuestionName', false);

        $validator
            ->scalar('QuestionDescription')
            ->maxLength('QuestionDescription', 4294967295)
            ->allowEmptyString('QuestionDescription');

        $validator
            ->integer('QuestionRate')
            ->requirePresence('QuestionRate', 'create')
            ->allowEmptyString('QuestionRate', false);

        $validator
            ->scalar('QuestionCategory')
            ->maxLength('QuestionCategory', 200)
            ->requirePresence('QuestionCategory', 'create')
            ->allowEmptyString('QuestionCategory', false);

        $validator
            ->scalar('QuestionTags')
            ->allowEmptyString('QuestionTags');

        $validator
            ->dateTime('DocDate')
            ->allowEmptyDateTime('DocDate');

        $validator
            ->dateTime('LastUpdate')
            ->allowEmptyDateTime('LastUpdate');

        $validator
            ->integer('UserCreate')
            ->allowEmptyString('UserCreate');

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
        $rules->add($rules->isUnique(['QuestionID']));

        return $rules;
    }
}
