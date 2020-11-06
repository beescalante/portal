<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymesTable Test Case
 */
class PaymesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymesTable
     */
    public $Paymes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paymes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paymes') ? [] : ['className' => PaymesTable::class];
        $this->Paymes = TableRegistry::getTableLocator()->get('Paymes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paymes);

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
}
