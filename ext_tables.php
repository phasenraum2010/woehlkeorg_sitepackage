<?php

/**
 * Created by PhpStorm.
 * User: tw
 * Date: 09.01.18
 * Time: 10:26
*/

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey) {

        TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	        # Default pid for "fe_groups" in Vidi:
	        tx_vidi.dataType.fe_groups.storagePid = 5
        ');
    }
);
