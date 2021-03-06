<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SoldListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SoldListsTable Test Case
 */
class SoldListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SoldListsTable
     */
    public $SoldLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sold_lists',
        'app.registered_users',
        'app.conversations',
        'app.listings',
        'app.categories',
        'app.courses',
        'app.purchased_lists',
        'app.selling_lists',
        'app.tags',
        'app.watching_lists',
        'app.wish_lists',
        'app.private_messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SoldLists') ? [] : ['className' => 'App\Model\Table\SoldListsTable'];
        $this->SoldLists = TableRegistry::get('SoldLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SoldLists);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
