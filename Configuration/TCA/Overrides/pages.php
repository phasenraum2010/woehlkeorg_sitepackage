<?php

/**
 * Created by PhpStorm.
 * User: tw
 * Date: 04.11.17
 * Time: 19:54
 */


defined('TYPO3_MODE') or die();
call_user_func(
    function ($extKey) {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript',
            'woehlke.org Sitepackage'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/ext/fs_media_gallery',
            'woehlke.org ext fs_media_gallery'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/ext/news',
            'woehlke.org ext news'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/localhost',
            'woehlke.org on Localhost'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/dev',
            'woehlke.org on Dev'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/live',
            'woehlke.org on Live'
        );

        unset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news']);

        // Register the RealUrl Autoconfig Hook
        if (! isset ($confArr ['enableRealURLAutoConfiguration']) || $confArr ['enableRealURLAutoConfiguration']) {
            $GLOBALS ['TYPO3_CONF_VARS'] ['SC_OPTIONS'] ['ext/realurl/class.tx_realurl_autoconfgen.php'] ['extensionConfiguration'] ['oekumene_tiergarten'] = 'ThomasWoehlke\\WoehlkeOrg\\Hooks\\RealUrl->addRealURLConfig';
        }

    }, 'woehlkeorg_sitepackage'
);
