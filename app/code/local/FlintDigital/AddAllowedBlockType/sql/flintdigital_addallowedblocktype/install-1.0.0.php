<?php

$installer = $this;
$installer->startSetup();


$allowedBlocksArray = array(
	'cms/block',
	'custom/block_type'
);

foreach ($allowedBlocksArray as $item) {
	try {
		Mage::getModel('admin/block')->setData('block_name', $item)->setData('is_allowed', 1)->save();
	}
	catch (Exception $e) {
		Mage::log($e->getMessage(), null, 'flintdigital_add_allowed.log', true);
	}
}


$allowedConfigArray = array(
	'custom/config/path'
);

foreach ($allowedConfigArray as $item) {
	try {
		Mage::getModel('admin/variable')->setData('variable_name', $item)->setData('is_allowed', 1)->save();
	}
	catch (Exception $e) {
		Mage::log($e->getMessage(), null, 'flintdigital_add_allowed.log', true);
	}
}

$installer->endSetup();