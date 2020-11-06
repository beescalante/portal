<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymesFixture
 */
class PaymesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_roman_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acquirerid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idcommerce' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'purchasecurrencycode' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'language' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_roman_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'programminglanguage' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_roman_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pasarela' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_roman_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'wallet' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_roman_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_roman_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'acquirerid' => 1,
                'idcommerce' => 1,
                'purchasecurrencycode' => 1,
                'language' => 'Lorem ipsum dolor ',
                'programminglanguage' => 'Lorem ipsum dolor ',
                'pasarela' => 'Lorem ipsum dolor sit amet',
                'wallet' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
