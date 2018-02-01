<?php
defined('TYPO3_MODE') or die();

unset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news']);


/* ===========================================================================
    Hooks
   =========================================================================== */

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news'] =
        \ThomasWoehlke\WoehlkeOrg\Hooks\RealUrlAutoConfiguration::class . '->addNewsConfig';
}


if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('metaseo')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['woehlkeorg_sitepackage'] =
        \ThomasWoehlke\WoehlkeOrg\Hooks\RealUrlAutoConfiguration::class . '->addMetaseoConfig';
}
