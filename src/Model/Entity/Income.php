<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Income Entity
 *
 * @property int $id
 * @property int $income_category_id
 * @property float $amount
 * @property string $purpose
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\IncomeCategory $income_category
 */
class Income extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'income_category_id' => true,
        'amount' => true,
        'purpose' => true,
        'created' => true,
        'modified' => true,
        'income_category' => true,
    ];
}
