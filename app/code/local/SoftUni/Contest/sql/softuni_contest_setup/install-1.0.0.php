<?php

/** @var $installer Mage_Sales_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'softuni_contest/contestant'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('softuni_contest/contestant'))
    ->addColumn('contestant_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Contestant Id')
    ->addColumn('contest_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned'  => true,
         ), 'Contest Id')
    ->addColumn('approved', Varien_Db_Ddl_Table::TYPE_SMALLINT,null, array(
        'default' => 0
        ), 'Approved')
    ->addColumn('firstname', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'Firstname')
    ->addColumn('lastname', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'Lastname')
    ->addColumn('dob', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        ), 'Dob')
    ->addColumn('country', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'Country')
    ->addColumn('city', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'City')
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(
        ), 'Message')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable' => false
        ), 'Created At')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable' => false
        ), 'Updated At')
    ->addColumn('telephone', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
    ), 'Telephone');
$installer->getConnection()->createTable($table);


/**
 * Create table 'softuni_contest/contest'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('softuni_contest/contest'))
    ->addColumn('contest_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable' => false,
        'primary'   => true,
    ), 'Contest Id')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
    ), 'Title')
    ->addColumn('is_active', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'unsigned' => true,
        'default'   => '1',
    ), 'Is Active')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Created At')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Updated At')
    ->addColumn('telephone', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
    ), 'Telephone');

$installer->getConnection()->createTable($table);

$installer->endSetup();