<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IncomeCategoriesFixture
 */
class IncomeCategoriesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-26 09:45:28',
                'modified' => '2022-12-26 09:45:28',
            ],
        ];
        parent::init();
    }
}
