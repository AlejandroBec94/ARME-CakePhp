<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HelpdeskTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HelpdeskTable Test Case
 */
class HelpdeskTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HelpdeskTable
     */
    public $Helpdesk;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Helpdesk'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Helpdesk') ? [] : ['className' => HelpdeskTable::class];
        $this->Helpdesk = TableRegistry::getTableLocator()->get('Helpdesk', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Helpdesk);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
