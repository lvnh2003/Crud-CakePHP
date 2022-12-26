<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Incomes Model
 *
 * @property \App\Model\Table\IncomeCategoriesTable&\Cake\ORM\Association\BelongsTo $IncomeCategories
 *
 * @method \App\Model\Entity\Income newEmptyEntity()
 * @method \App\Model\Entity\Income newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Income[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Income get($primaryKey, $options = [])
 * @method \App\Model\Entity\Income findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Income patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Income[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Income|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IncomesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('incomes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('IncomeCategories', [
            'foreignKey' => 'income_category_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('income_category_id')
            ->notEmptyString('income_category_id');

        $validator
            ->numeric('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->scalar('purpose')
            ->maxLength('purpose', 100)
            ->requirePresence('purpose', 'create')
            ->notEmptyString('purpose');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('income_category_id', 'IncomeCategories'), ['errorField' => 'income_category_id']);

        return $rules;
    }
}
