<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GradosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GradosTable Test Case
 */
class GradosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GradosTable
     */
    public $Grados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Grados',
        'app.Docentes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Grados') ? [] : ['className' => GradosTable::class];
        $this->Grados = TableRegistry::getTableLocator()->get('Grados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Grados);

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
