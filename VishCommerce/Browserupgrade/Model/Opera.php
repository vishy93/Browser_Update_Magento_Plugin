<?php
class VishCommerce_Browserupgrade_Model_Opera
{
	public function toOptionArray()
	{
		return array(
			array('value' => '10.1', 'label' => Mage::helper('browserupgrade/data')->__('<= 10.1')),
			array('value' => '10.5', 'label' => Mage::helper('browserupgrade/data')->__('<= 10.5')),
			array('value' => '10.6', 'label' => Mage::helper('browserupgrade/data')->__('<= 10.6')),
			array('value' => '11', 'label' => Mage::helper('browserupgrade/data')->__('<= 11')),
		);
	}
}
