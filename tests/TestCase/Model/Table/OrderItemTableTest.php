<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderItemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderItemTable Test Case
 */
class OrderItemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderItemTable
     */
    protected $OrderItem;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrderItem',
        'app.Books',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrderItem') ? [] : ['className' => OrderItemTable::class];
        $this->OrderItem = TableRegistry::getTableLocator()->get('OrderItem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrderItem);

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
