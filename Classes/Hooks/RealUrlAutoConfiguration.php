<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 29.01.18
 * Time: 02:37
 */
namespace ThomasWoehlke\WoehlkeOrg\Hooks;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


// https://docs.typo3.org/typo3cms/extensions/news/3.0.0/Main/Administration/Realurl/Index.html

// https://docs.typo3.org/typo3cms/extensions/metaseo/AdministratorManual/Index.html#realurl-configuration


class RealUrlAutoConfiguration {


    /**
     * Generates additional RealURL configuration and merges it with provided configuration
     *
     * @param       array $params Default configuration
     * @return      array Updated configuration
     */
    public function addRealUrlConfig($params)
    {

        // Check for proper unique key
        //$postVar = (ExtensionManagementUtility::isLoaded('tt_news') ? 'tx_news' : 'news');

        return array_merge_recursive($params['config'], [
                'pagePath' => array(
                    'type' => 'user',
                    'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
                    'spaceCharacter' => '-',
                    'languageGetVar' => 'L',
                    'expireDays' => '3',
                    'rootpage_id' => 1,
                    'firstHitPathCache'=>1
                ),
                'init' => array(
                    'enableCHashCache' => TRUE,
                    'enableCHashCache' => 1,
                    'respectSimulateStaticURLs' => 0,
                    'enableUrlDecodeCache' => 1,
                    'enableUrlEncodeCache' => 1
                ),
                'fileName' => array(
                    'defaultToHTMLsuffixOnPrev' => 0,
                    'acceptHTMLsuffix' => 0,
                    'index' =>
                        array (
                            'sitemap.xml' =>
                                array (
                                    'keyValues' =>
                                        array (
                                            'type' => 841132,
                                        ),
                                ),
                            'sitemap.txt' =>
                                array (
                                    'keyValues' =>
                                        array (
                                            'type' => 841131,
                                        ),
                                ),
                            'robots.txt' =>
                                array (
                                    'keyValues' =>
                                        array (
                                            'type' => 841133,
                                        ),
                                ),
                            '_DEFAULT' =>
                                array (
                                    'keyValues' =>
                                        array (
                                            'type' => 0,
                                        ),
                                ),
                        ),
                ),
                'preVars' => array(
                    array(
                        'GETvar' => 'L',
                        'valueMap' => array(
                            'en' => '1',
                        ),
                        'noMatch' => 'bypass',
                    ),
                    array(
                        'GETvar' => 'no_cache',
                        'valueMap' => array(
                            'de' => 0,
                        ),
                        'noMatch' => 'bypass',
                    ),
                ),
                'fixedPostVars' => array(
                    'newsDetailConfiguration' => array(
                        array(
                            'GETvar' => 'tx_news_pi1[action]',
                            'valueMap' => array(
                                'detail' => '',
                            ),
                            'noMatch' => 'bypass'
                        ),
                        array(
                            'GETvar' => 'tx_news_pi1[controller]',
                            'valueMap' => array(
                                'News' => '',
                            ),
                            'noMatch' => 'bypass'
                        ),
                        array(
                            'GETvar' => 'tx_news_pi1[day]',
                            'noMatch' => 'bypass',
                        ),
                        array(
                            'GETvar' => 'tx_news_pi1[month]',
                            'noMatch' => 'bypass',
                        ),
                        array(
                            'GETvar' => 'tx_news_pi1[year]',
                            'noMatch' => 'bypass',
                        ),
                        array(
                            'GETvar' => 'tx_news_pi1[news]',
                            'lookUpTable' => array(
                                'table' => 'tx_news_domain_model_news',
                                'id_field' => 'uid',
                                'alias_field' => 'title',
                                'addWhereClause' => ' AND NOT deleted',
                                'useUniqueCache' => 1,
                                'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-'
                                ),
                                'languageGetVar' => 'L',
                                'languageExceptionUids' => '',
                                'languageField' => 'sys_language_uid',
                                'transOrigPointerField' => 'l10n_parent',
                                'autoUpdate' => 1,
                                'expireDays' => 180,
                            ),
                        ),
                    ),
                    'newsCategoryConfiguration' => array(
                        array(
                            'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
                            'lookUpTable' => array(
                                'table' => 'sys_category',
                                'id_field' => 'uid',
                                'alias_field' => 'title',
                                'addWhereClause' => ' AND NOT deleted',
                                'useUniqueCache' => 1,
                                'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-'
                                )
                            )
                        )
                    ),
                    'newsTagConfiguration' => array(
                        array(
                            'GETvar' => 'tx_news_pi1[overwriteDemand][tags]',
                            'lookUpTable' => array(
                                'table' => 'tx_news_domain_model_tag',
                                'id_field' => 'uid',
                                'alias_field' => 'title',
                                'addWhereClause' => ' AND NOT deleted',
                                'useUniqueCache' => 1,
                                'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-'
                                )
                            )
                        )
                    ),
                    '7' => 'newsDetailConfiguration',
                    '9' => 'newsDetailConfiguration',
                    '6' => 'newsTagConfiguration',
                    '6' => 'newsCategoryConfiguration',

                ),
                'postVarSets' => array(
                    '_DEFAULT' => array(
                        'post' => array(
                            array(
                                'GETvar' => 'tx_news_pi1[action]',
                                'noMatch' => 'bypass'
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[controller]',
                                'noMatch' => 'bypass'
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[day]',
                                'noMatch' => 'bypass',
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[month]',
                                'noMatch' => 'bypass',
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[year]',
                                'noMatch' => 'bypass',
                            ),
                        ),
                        'controller' => array(
                            array(
                                'GETvar' => 'tx_news_pi1[action]',
                                'noMatch' => 'bypass'
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[controller]',
                                'noMatch' => 'bypass'
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[day]',
                                'noMatch' => 'bypass',
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[month]',
                                'noMatch' => 'bypass',
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[year]',
                                'noMatch' => 'bypass',
                            ),
                        ),
                        'dateFilter' => array(
                            array(
                                'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
                            ),
                        ),
                        'page' => array(
                            array(
                                'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                            ),
                        ),
                    ),
                ),
            ]
        );
    }

}
