<?php
class VishCommerce_Browserupgrade_Model_Safari
{
	public function toOptionArray()
	{
		return array(
			array('value' => '1.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 1.0')),
			array('value' => '1.2', 'label' => Mage::helper('browserupgrade/data')->__('<= 1.2')),
			array('value' => '2.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 2.0')),
			array('value' => '3.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 3.0')),
			array('value' => '3.2', 'label' => Mage::helper('browserupgrade/data')->__('<= 3.2')),
			array('value' => '4', 'label' => Mage::helper('browserupgrade/data')->__('<= 4')),
			array('value' => '5', 'label' => Mage::helper('browserupgrade/data')->__('<= 5')),
		);
	}
}
