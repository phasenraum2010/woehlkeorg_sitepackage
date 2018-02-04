<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 04.02.18
 * Time: 09:36
 */
namespace ThomasWoehlke\WoehlkeOrg\Scheduler\Task;

use TYPO3\CMS\Scheduler\Task\AbstractTask as Typo3AbstractTask;
use TYPO3\CMS\Core\Utility\GeneralUtility as Typo3GeneralUtility;
use Metaseo\Metaseo\Utility\DatabaseUtility;
use Metaseo\Metaseo\Utility\ConsoleUtility;

/**
 * Execute Task: Abstand von Akkordeon Teilen einrichten
 */
class UpdateMarginsForTtContentextendsTask extends Typo3AbstractTask
{

    /**
     * Execute Task: Abstand von Akkordeon Teilen einrichten
     *
     * @return  boolean
     */
    public function execute()
    {
        $sqlQuery = 'update tt_content set tx_t3sbootstrap_margin_sides=\'b\', tx_t3sbootstrap_margin_size=3 where CType = \'gridelements_pi1\' and tx_gridelements_backend_layout = \'collapsible_accordion\'';
        $affectedRows = DatabaseUtility::exec($sqlQuery);
        ConsoleUtility::writeLine('Execute Task: Abstand von Akkordeon Teilen einrichten (update Margins For tt_content): '.$affectedRows);
        return true;
    }

}
