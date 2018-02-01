<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 29.01.18
 * Time: 02:37
 */
namespace ThomasWoehlke\WoehlkeOrg\Hooks;


// https://docs.typo3.org/typo3cms/extensions/news/3.0.0/Main/Administration/Realurl/Index.html

// https://docs.typo3.org/typo3cms/extensions/metaseo/AdministratorManual/Index.html#realurl-configuration


class RealUrlAutoConfiguration {


    /**
     * Generates additional RealURL configuration and merges it with provided configuration
     *
     * @param       array $params Default configuration
     * @return      array Updated configuration
     */
    public function addNewsConfig($params)
    {

        // Check for proper unique key
        $postVar = (ExtensionManagementUtility::isLoaded('tt_news') ? 'tx_news' : 'news');

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
                            'de' => 1,
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
                            )
                        )
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
                    '70' => 'newsDetailConfiguration',
                    '701' => 'newsDetailConfiguration', // For additional detail pages, add their uid as well
                    '71' => 'newsTagConfiguration',
                    '72' => 'newsCategoryConfiguration',

                ),
                'postVarSets' => array(
                    '_DEFAULT' => array(
                        'controller' => array(
                            array(
                                'GETvar' => 'tx_news_pi1[action]',
                                'noMatch' => 'bypass'
                            ),
                            array(
                                'GETvar' => 'tx_news_pi1[controller]',
                                'noMatch' => 'bypass'
                            )
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


    function addMetaseoConfig($params)
    {

        if(ExtensionManagementUtility::isLoaded('metaseo')){
            $postVar = ('metaseo');

            return array_merge_recursive($params['config'], [
                'fileName' =>
                    array (
                    'defaultToHTMLsuffixOnPrev' => 0,
                    'acceptHTMLsuffix' => 1,
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
                ]
            );

        }
    }



    /**
     * Main hook function.
     * Generates an entire RealURL configuration.
     *
     * @param
     *        	array		Main parameters. Typically, 'config' is the
     *        	existing RealURL configuration thas has been
     *        	generated to this point and 'extKey' is unique
     *        	that this hook used when it was registered.
     */
    function addRealURLConfig(&$params, $parentObj)
    {
        $config = &$params ['config'];

        /* pagePath */
        if (! is_array ( $config ['pagePath'])) {
            $config ['pagePath'] = Array ();
        }
        $config ['pagePath'] = array_merge ( $config ['pagePath'], $this->addPagePath() );

        /* init */
        if (! is_array ( $config ['init'])) {
            $config ['init'] = Array ();
        }
        $config ['init'] = array_merge ( $config ['init'], $this->addPagePath() );

        /* fixedPostVars */
        if (! is_array ( $config ['fixedPostVars'])) {
            $config ['fixedPostVars'] = Array ();
        }
        $config ['fixedPostVars'] = array_merge ( $config ['fixedPostVars'], $this->addFixedPostVars() );

        /* postVarSets */
        if (! is_array ( $config ['postVarSets'])) {
            $config ['postVarSets'] = Array ();
        }
        $config ['postVarSets'] = array_merge ( $config ['postVarSets'], $this->addPostVarSets() );

        /* fileName */
        if (! is_array ( $config ['fileName'])) {
            $config ['fileName'] = Array ();
        }
        $config ['fileName'] = array_merge ( $config ['fileName'], $this->addFilenameSet () );

        return $config;
    }


    /**
     * Adds the filenameSet (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addFilenameSet() {
        $filenameSet = array(
            'defaultToHTMLsuffixOnPrev' => 0,
            'acceptHTMLsuffix' => 1,
            'index' => array(
                /*
                'feed.rss' => array(
                    'keyValues' => array(
                        'type' => 9818,
                    ),
                ),
                'calendar.ical' => array(
                    'keyValues' => array(
                        'type' => 9819,
                    )
                ),
                */
                'sitemap.xml' => array(
                    'keyValues' => array(
                        'type' => 841132,
                    ),
                ),
                'sitemap.txt' => array(
                    'keyValues' => array(
                        'type' => 841131,
                    ),
                ),
                'robots.txt' => array(
                    'keyValues' => array(
                        'type' => 841133,
                    ),
                ),
                '_DEFAULT' => array(
                    'keyValues' => array(
                        'type' => 0,
                    ),
                ),
            ),
        );
        return $filenameSet;
    }

    /**
     * Adds the pagePath (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addPagePath() {
        $pagePath = array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => '3',
            'rootpage_id' => 1,
            'firstHitPathCache' => 1
        );
        return $pagePath;
    }

    /**
     * Adds the init (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addInit(){
        $init = array(
            'enableCHashCache' => TRUE,
            'respectSimulateStaticURLs' => 0,
            'appendMissingSlash' => 'ifNotFile,redirect',
            'adminJumpToBackend' => TRUE,
            'enableUrlDecodeCache' => TRUE,
            'enableUrlEncodeCache' => TRUE,
            'emptyUrlReturnValue' => '/',
        );
        return $init;
    }

    /**
     * Adds the postVarSets (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addPostVarSets() {
        $postVarSets = array(
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
        );
        return $postVarSets;
    }

    /**
     * Adds the preVarSets (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addPreVarSets() {
        $preVarSets = array(
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
                    'nc' => 1,
                ),
                'noMatch' => 'bypass',
            ),
        );
        return $preVarSets;
    }

    /**
     * Adds the fixedPostVars (not specific to a page) to the RealURL config.
     *
     * @return array configuration element.
     */
    function addFixedPostVars(){
        $fixedPostVars = array(
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
                        'expireDays' => 180,
                    )
                )
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
            '70' => 'newsDetailConfiguration',
            '701' => 'newsDetailConfiguration', // For additional detail pages, add their uid as well
            '71' => 'newsTagConfiguration',
            '72' => 'newsCategoryConfiguration',
        );
        return $fixedPostVars;
    }

    /**
     * ***********************************************************************
     *
     * Helper functions for generating common RealURL config elements.
     *
     * **********************************************************************
     */

    /**
     * Adds a RealURL config element for simple GET variables.
     *
     * array( 'GETvar' => 'tx_calendar_pi1[f1]' ),
     *
     * @param
     *        	string		The GET variable.
     * @return array config element.
     */
    function addSimple($key) {
        return Array (
            'GETvar' => $key
        );
    }

    /**
     * Adds RealURL config element for table lookups.
     *
     * array(
     * 'GETvar' => 'tx_ttnews[tt_news]',
     * 'lookUpTable' => array(
     * 'table' => 'tt_news',
     * 'id_field' => 'uid',
     * 'alias_field' => 'title',
     * 'addWhereClause' => ' AND NOT deleted',
     * 'useUniqueCache' => 1,
     * 'useUniqueCache_conf' => array(
     * 'strtolower' => 1,
     * 'spaceCharacter' => '_',
     * )
     * )
     * )
     *
     * @param
     *        	string		The GET variable.
     * @param
     *        	string		The name of the table.
     * @param
     *        	string		The field in the table to be used in the URL.
     * @param
     *        	string		Previous GET variable that must be present for
     *        	this rule to be evaluated.
     * @return array config element.
     */
    function addTable($key, $table, $aliasField = 'title', $condForPrevious = false, $where = ' AND NOT deleted') {
        $configArray = Array ();

        if ($condForPrevious) {
            $configArray ['cond'] = Array (
                'prevValueInList' => $condForPrevious
            );
        }

        $configArray ['GETvar'] = $key;
        $configArray ['lookUpTable'] = Array (
            'table' => $table,
            'id_field' => 'uid',
            'alias_field' => $aliasField,
            'addWhereClause' => $where,
            'useUniqueCache' => 1,
            'useUniqueCache_conf' => Array (
                'strtolower' => 1,
                'spaceCharacter' => '_'
            )
        );

        return $configArray;
    }

    /**
     * Adds RealURL config element for value map.
     * array(
     * 'GETvar' => 'sub',
     * 'valueMap' => array(
     * 'subscribe' => '1',
     * 'unsubscribe' => '2',
     * ),
     * 'noMatch' => 'bypass',
     * )
     *
     * @param
     *        	string		The GET variable.
     * @param
     *        	array		Associative array with label and value.
     * @param
     *        	string		noMatch behavior.
     * @return array config element.
     */
    function addValueMap($key, $valueMapArray, $noMatch = 'bypass') {
        $configArray = Array ();
        $configArray ['GETvar'] = $key;

        if (is_array ( $valueMapArray )) {
            foreach ( $valueMapArray as $key => $value ) {
                $configArray ['valueMap'] [$key] = $value;
            }
        }

        $configArray ['noMatch'] = $noMatch;
        return $configArray;
    }

    /**
     * Adds RealURL config element for single type.
     *
     * array(
     * 'type' => 'single',
     * 'keyValues' => array(
     * 'tx_newloginbox_pi1[forgot]' => 1,
     * )
     * )
     *
     * @param
     *        	array		Associative array of GET variables and values.
     *        	All values must be matched.
     * @return array config element.
     */
    function addSingle($keyValueArray) {
        $configArray = Array ();
        $configArray ['type'] = 'single';

        if (is_array ( $keyValueArray )) {
            foreach ( $keyValueArray as $key => $value ) {
                $configArray ['keyValues'] [$key] = $value;
            }
        }

        return $configArray;
    }



}
