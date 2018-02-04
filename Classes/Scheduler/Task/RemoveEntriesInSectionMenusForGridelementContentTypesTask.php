<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 04.02.18
 * Time: 09:38
 */

namespace ThomasWoehlke\WoehlkeOrg\Scheduler\Task;

use TYPO3\CMS\Scheduler\Task\AbstractTask as Typo3AbstractTask;
use TYPO3\CMS\Core\Utility\GeneralUtility as Typo3GeneralUtility;
use Metaseo\Metaseo\Utility\DatabaseUtility;
use Metaseo\Metaseo\Utility\ConsoleUtility;

/**
 * Einträge in Section-Menu für Gridelements entfernen
 */
class RemoveEntriesInSectionMenusForGridelementContentTypesTask extends Typo3AbstractTask
{

    /**
     * Execute Task: remove Entries in SectionMenus for Gridelement ContentTypes:
     *
     * @return  boolean
     */
    public function execute()
    {
        $sqlQuery = 'update tt_content set sectionIndex=0 where CType = \'gridelements_pi1\' and tx_gridelements_backend_layout = \'collapsible_accordion\'';
        $affectedRows = DatabaseUtility::exec($sqlQuery);
        ConsoleUtility::writeLine('removed Entries in SectionMenus for Gridelement ContentTypes: '.$affectedRows);
        return true;
    }

}
