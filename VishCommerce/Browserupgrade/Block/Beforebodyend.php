<?php
class VishCommerce_Browserupgrade_Block_Beforebodyend extends Mage_Core_Block_Template 
{
	public function __construct()
	{
		
	}

	public function isNoticeEnabled() {
		return Mage::helper('browserupgrade/data')->getNotifcationEnabled();
	}

	public function getJsOptions() {
		$helper = Mage::helper('browserupgrade/data');

		$jsOptionsString = '';
		if (!$helper->getAutoVersion())
		{
			$jsOptionsString .= 'vs: {' .
			'i:' . $helper->getMinIeVersion() . ',' .
			'f:' . $helper->getMinFirefoxVersion() . ',' .
			'o:' . $helper->getMinOperaVersion() . ',' .
			's:' . $helper->getMinSafariVersion() . ',' .
			'n:9},'; // n: Undocumented??
		}
		$jsOptionsString .= 'reminder: ' . $helper->getReminder() . ',';
		if ($helper->getForceSpecificLanguage()) 
			$jsOptionsString .= 'l: ' . json_encode($helper->getSpecificLanguage()) . ',';
		if ($helper->getAlwaySshow()) 
			$jsOptionsString .= 'test: true,';
		if ($helper->getUsecustomText()) 
			$jsOptionsString .= 'text: ' . json_encode($helper->getCustomText()) . ',';
		if ($helper->getOpenNewWindow()) 
			$jsOptionsString .= 'newwindow: true,';
			$jsOptionsString .= 'api: 2018.12,';
		return substr($jsOptionsString, 0, strlen($jsOptionsString) -1);
	}

}
