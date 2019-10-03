<?php
class VishCommerce_Browserupgrade_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_BROWSERUPGRADE_ENABLED   = 'web/browserupgrade/enabled';
	const XML_PATH_BROWSERUPGRADE_AUTO_VERSION   = 'web/browserupgrade/autoupdate';
	const XML_PATH_BROWSERUPGRADE_IE_MIN_VERSION   = 'web/browserupgrade/ieminversion';
	const XML_PATH_BROWSERUPGRADE_FF_MIN_VERSION   = 'web/browserupgrade/firefoxminversion';
	const XML_PATH_BROWSERUPGRADE_OPERA_MIN_VERSION   = 'web/browserupgrade/operaminversion';
	const XML_PATH_BROWSERUPGRADE_SAFARI_MIN_VERSION   = 'web/browserupgrade/safariminversion';
	const XML_PATH_BROWSERUPGRADE_USE_NEW_WINDOW   = 'web/browserupgrade/usenewwindow';
	const XML_PATH_BROWSERUPGRADE_ALWAYS_SHOW   = 'web/browserupgrade/alwaysshow';
	const XML_PATH_BROWSERUPGRADE_USE_CUSTOM_TEXT   = 'web/browserupgrade/usecustomtext';
	const XML_PATH_BROWSERUPGRADE_CUSTOM_TEXT   = 'web/browserupgrade/customtext';
	const XML_PATH_BROWSERUPGRADE_FORCE_SPECIFIC_LANG   = 'web/browserupgrade/forcespecificlanguage';
	const XML_PATH_BROWSERUPGRADE_SPECIFICLANG   = 'web/browserupgrade/specificlanguage';
	const XML_PATH_BROWSERUPGRADE_REMINDER   = 'web/browserupgrade/reminder';

	public function getNotifcationEnabled() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_ENABLED);
	}

	public function getAutoVersion() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_AUTO_VERSION);
	}

	public function getReminder() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_REMINDER);
	}

	public function getMinIeVersion() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_IE_MIN_VERSION);
	}

	public function getMinFirefoxVersion() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_FF_MIN_VERSION);
	}

	public function getMinOperaVersion() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_OPERA_MIN_VERSION);
	}

	public function getMinSafariVersion() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_SAFARI_MIN_VERSION);
	}

	public function getOpenNewWindow() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_USE_NEW_WINDOW);
	}

	public function getAlwaySshow() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_ALWAYS_SHOW);
	}

	public function getUsecustomText() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_USE_CUSTOM_TEXT);
	}

	public function getCustomText() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_CUSTOM_TEXT);
	}

	public function getForceSpecificLanguage() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_FORCE_SPECIFIC_LANG);
	}

	public function getSpecificLanguage() {
		return Mage::getStoreConfig(self::XML_PATH_BROWSERUPGRADE_SPECIFICLANG);
	}

}
