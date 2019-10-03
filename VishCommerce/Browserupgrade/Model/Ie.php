<?php
class VishCommerce_Browserupgrade_Model_Ie
{
	public function toOptionArray()
	{
		return array(
			array('value' => '5.5', 'label' => Mage::helper('browserupgrade/data')->__('<= 5.5')),
			array('value' => '6', 'label' => Mage::helper('browserupgrade/data')->__('<= 6')),
			array('value' => '7', 'label' => Mage::helper('browserupgrade/data')->__('<= 7')),
			array('value' => '8', 'label' => Mage::helper('browserupgrade/data')->__('<= 8')),
		);
	}
}
