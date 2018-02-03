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
            'Configuration/TypoScript/host/live',
            'woehlke.org on Live'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/test',
            'woehlke.org on Test'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/dev',
            'woehlke.org on Dev'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'woehlkeorg_sitepackage',
            'Configuration/TypoScript/host/localhost',
            'woehlke.org on Localhost'
        );



    }, 'woehlkeorg_sitepackage'
);
