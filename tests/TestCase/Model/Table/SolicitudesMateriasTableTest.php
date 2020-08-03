<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudesMateriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudesMateriasTable Test Case
 */
class SolicitudesMateriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudesMateriasTable
     */
    public $SolicitudesMaterias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SolicitudesMaterias',
        'app.Solicitudes',
        'app.Materias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SolicitudesMaterias') ? [] : ['className' => SolicitudesMateriasTable::class];
        $this->SolicitudesMaterias = TableRegistry::getTableLocator()->get('SolicitudesMaterias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolicitudesMaterias);

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
