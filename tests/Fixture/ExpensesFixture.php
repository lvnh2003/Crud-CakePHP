<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpensesFixture
 */
class ExpensesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'expenses_category_id' => 1,
                'amount' => 1,
                'purpose' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-26 09:44:41',
                'modified' => '2022-12-26 09:44:41',
            ],
        ];
        parent::init();
    }
}
