<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublisherTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublisherTable Test Case
 */
class PublisherTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PublisherTable
     */
    protected $Publisher;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Publisher',
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
        $config = TableRegistry::getTableLocator()->exists('Publisher') ? [] : ['className' => PublisherTable::class];
        $this->Publisher = TableRegistry::getTableLocator()->get('Publisher', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Publisher);

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
