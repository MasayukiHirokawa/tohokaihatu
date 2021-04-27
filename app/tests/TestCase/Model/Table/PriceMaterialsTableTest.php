<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PriceMaterialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PriceMaterialsTable Test Case
 */
class PriceMaterialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PriceMaterialsTable
     */
    public $PriceMaterials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.price_materials',
        'app.materials',
        'app.material_suppliers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PriceMaterials') ? [] : ['className' => PriceMaterialsTable::class];
        $this->PriceMaterials = TableRegistry::getTableLocator()->get('PriceMaterials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PriceMaterials);

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
