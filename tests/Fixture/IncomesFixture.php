<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IncomesFixture
 */
class IncomesFixture extends TestFixture
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
                'income_category_id' => 1,
                'amount' => 1,
                'purpose' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-26 09:44:57',
                'modified' => '2022-12-26 09:44:57',
            ],
        ];
        parent::init();
    }
}
