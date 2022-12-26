<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpensesCategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpensesCategoriesTable Test Case
 */
class ExpensesCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpensesCategoriesTable
     */
    protected $ExpensesCategories;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ExpensesCategories',
        'app.Expenses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ExpensesCategories') ? [] : ['className' => ExpensesCategoriesTable::class];
        $this->ExpensesCategories = $this->getTableLocator()->get('ExpensesCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ExpensesCategories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpensesCategoriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
