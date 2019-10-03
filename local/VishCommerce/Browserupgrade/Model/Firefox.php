<?php
class VishCommerce_Browserupgrade_Model_Firefox
{
	public function toOptionArray()
	{
		return array(
			array('value' => '1.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 1.0')),
			array('value' => '1.5', 'label' => Mage::helper('browserupgrade/data')->__('<= 1.5')),
			array('value' => '2.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 2.0')),
			array('value' => '3.0', 'label' => Mage::helper('browserupgrade/data')->__('<= 3.0')),
			array('value' => '3.5', 'label' => Mage::helper('browserupgrade/data')->__('<= 3.5')),
			array('value' => '3.6', 'label' => Mage::helper('browserupgrade/data')->__('<= 3.6')),
			array('value' => '4', 'label' => Mage::helper('browserupgrade/data')->__('<= 4')),
			array('value' => '5', 'label' => Mage::helper('browserupgrade/data')->__('<= 5')),
			array('value' => '11', 'label' => Mage::helper('browserupgrade/data')->__('<= 11')),
			array('value' => '12', 'label' => Mage::helper('browserupgrade/data')->__('<= 12')),
		);
	}
}
