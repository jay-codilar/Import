<?php
/**
 * @package     Magento Tutorials
 * @author      Jaya Chandra, Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://www.codilar.com/
 */

namespace Codilar\Import\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->createMyTable($setup);
    }

    /**
     * @param SchemaSetupInterface $setup
     * @throws \Zend_Db_Exception
     */
    protected function createMyTable(SchemaSetupInterface $setup) {
        $tableName = $setup->getTable("my_import_demo_module_table");
        $table = $setup->getConnection()->newTable(
            $tableName
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'entity_id'
        )->addColumn(
            'company_name',
            Table::TYPE_TEXT,
            100,
            ['nullable' => false],
            'Company Name'
        )->addColumn(
            'model_name',
            Table::TYPE_TEXT,
            100,
            ['nullable' => false],
            'Model Name'
//        )->addColumn(
//            'created_at',
//            Table::TYPE_TIMESTAMP,
//            null,
//            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
//            'Created date'
        )->setComment(
            'My import demo module table'
        );
        $setup->getConnection()->createTable($table);
    }
}