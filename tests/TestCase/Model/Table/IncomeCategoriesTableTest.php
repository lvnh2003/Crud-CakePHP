<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IncomeCategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IncomeCategoriesTable Test Case
 */
class IncomeCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IncomeCategoriesTable
     */
    protected $IncomeCategories;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.IncomeCategories',
        'app.Incomes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('IncomeCategories') ? [] : ['className' => IncomeCategoriesTable::class];
        $this->IncomeCategories = $this->getTableLocator()->get('IncomeCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->IncomeCategories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IncomeCategoriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
