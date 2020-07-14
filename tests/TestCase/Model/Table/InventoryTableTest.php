<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventoryTable Test Case
 */
class InventoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InventoryTable
     */
    protected $Inventory;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Inventory',
        'app.Books',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Inventory') ? [] : ['className' => InventoryTable::class];
        $this->Inventory = TableRegistry::getTableLocator()->get('Inventory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Inventory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
