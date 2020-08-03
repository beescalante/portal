<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrerasSedesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrerasSedesTable Test Case
 */
class CarrerasSedesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrerasSedesTable
     */
    public $CarrerasSedes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CarrerasSedes',
        'app.Carreras',
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
        $config = TableRegistry::getTableLocator()->exists('CarrerasSedes') ? [] : ['className' => CarrerasSedesTable::class];
        $this->CarrerasSedes = TableRegistry::getTableLocator()->get('CarrerasSedes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarrerasSedes);

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
