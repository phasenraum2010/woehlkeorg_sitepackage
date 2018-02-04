<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 04.02.18
 * Time: 09:34
 */

namespace ThomasWoehlke\WoehlkeOrg\Scheduler\Task;

use TYPO3\CMS\Scheduler\Task\AbstractTask as Typo3AbstractTask;
use TYPO3\CMS\Core\Utility\GeneralUtility as Typo3GeneralUtility;
use Metaseo\Metaseo\Utility\DatabaseUtility;
use Metaseo\Metaseo\Utility\ConsoleUtility;


/**
 * Execute Task: protected Intranet Files
 */
class ProtectIntranetFilesTask extends Typo3AbstractTask
{

    /**
     * Execute Task: protected Intranet Files
     *
     * @return  boolean
     */
    public function execute()
    {
        $sqlQuery = 'update sys_file_metadata,sys_file set sys_file_metadata.fe_groups=-2  where sys_file.uid = sys_file_metadata.file and sys_file.identifier like \'%Intranet%\'';
        $affectedRows = DatabaseUtility::exec($sqlQuery);
        ConsoleUtility::writeLine('Executed Task: protected Intranet Files: '.$affectedRows);
        return true;
    }
}
