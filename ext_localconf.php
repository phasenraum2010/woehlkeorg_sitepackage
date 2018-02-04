<?php
defined('TYPO3_MODE') or die();

// ##############################################
// Hooks
// ##############################################

// RealUrlAutoConfiguration
unset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news']);
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news'] =
        \ThomasWoehlke\WoehlkeOrg\Hooks\RealUrlAutoConfiguration::class . '->addRealUrlConfig';
}

// ##############################################
// SCHEDULER
// ##############################################

// Protected Intranet Files task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
['ThomasWoehlke\\WoehlkeOrg\\Scheduler\\Task\\ProtectIntranetFilesTask'] = array(
    'extension'   => $_EXTKEY,
    'title'       => 'Protected Intranet Files',
    'description' => 'Setzt Zugriff der Dateien in fileadmin/**Intranet** auf Anzeigen, wenn angemeldet'
);

// Protected Intranet Files task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
['ThomasWoehlke\\WoehlkeOrg\\Scheduler\\Task\\RemoveEntriesInSectionMenusForGridelementContentTypesTask'] = array(
    'extension'   => $_EXTKEY,
    'title'       => 'Remove Entries in SectionMenus for Gridelement ContentTypes',
    'description' => 'Einträge in Section-Menu für Gridelements entfernen'
);

// Protected Intranet Files task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
['ThomasWoehlke\\WoehlkeOrg\\Scheduler\\Task\\UpdateMarginsForTtContentextendsTask'] = array(
    'extension'   => $_EXTKEY,
    'title'       => 'update Margins For tt_content',
    'description' => 'Abstand von Akkordeon Teilen einrichten'
);


