<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CobrosdlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CobrosdlTable Test Case
 */
class CobrosdlTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CobrosdlTable
     */
    public $Cobrosdl;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cobrosdl',
        'app.Sedes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cobrosdl') ? [] : ['className' => CobrosdlTable::class];
        $this->Cobrosdl = TableRegistry::getTableLocator()->get('Cobrosdl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cobrosdl);

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
