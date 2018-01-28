<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "woehlkeorg_sitepackage".
 * Auto generated 25-11-2017 22:45
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'woehlke.org Sitepackage',
    'description' => 'Site Packge for woehlke.org',
    'category' => 'templates',
    'version' => '0.0.6',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => 'uploads/tx_woehlkeorg_sitepackage',
    'clearcacheonload' => true,
    'author' => 'Thomas Woehlke',
    'author_email' => 'thomas@woehlke.org',
    'author_company' => 'private',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.8-8.7.99',
            'php' => '7.0.0-7.0.999',
            /* System-Extensions: */
            'info' => '8.7.8-8.7.99',
            'fluid' => '8.7.8-8.7.99',
            'extbase' => '8.7.8-8.7.99',
            'scheduler' => '8.7.8-8.7.99',
            'indexed_search' => '8.7.8-8.7.99',
            'fluid_styled_content' => '8.7.8-8.7.99',
            'form' => '8.7.8-8.7.99',
            'recycler' => '8.7.8-8.7.99',
            'reports' => '8.7.8-8.7.99',
            'rte_ckeditor' => '8.7.8-8.7.99',
            /* TER-Extensions: */
            'tsconf' => '9.0.0-9.99.99',
            'static_info_tables' => '6.5.1-6.99.99',
            'static_info_tables_de' => '6.4.1-6.99.99',
            'rte_ckeditor_fontawesome' => '8.7.7-8.99.99',
            'gridelements' => '8.0.0-8.9.99',
            'realurl' => '2.3.1-2.99.99',
            'tt_address' => '3.2.2-3.99.99',
            'typo3_console' => '5.0.3 -5.0.99',
            'vhs' => '4.3.3-4.3.99',
            'vidi' => '2.6.0 -2.6.99',
            'bm_image_gallery' => '2.0.1-2.0.99',
            'crawler' => '6.1.0-6.1.99',
            #'fs_media_gallery' => '1.4.7-1.4.99',
            'jumpurl' => '7.7.1-7.7.99',
            'metaseo' => '3.0.0-3.0.99',
            'mindshape_cookie_hint' => '1.0.11-1.0.99',
            'news' => '6.1.1-6.99.99',
            'pagenotfoundhandling' => '2.4.5-2.4.99',
            'pb_filelist' => '3.0.1-3.0.99',
            'recurr' => '1.0.0-1.0.99',
            'media' => '4.5.0-4.5.99',
            'aimeos' => '18.1.0-18.99.99',
            'dyncss' => '0.8.2-0.8.99',
            'dyncss_scss' => '1.1.1-1.1.99',
            't3sbootstrap' => '4.1.0-4.9.99'
        ),
        'conflicts' => array(
            'fluidpages' => '0.0.0-99.99.99',
            'cooluri' => '0.0.0-99.99.99',
            'simulatestatic' => '0.0.0-99.99.99',
        ),/*
        'suggests' => array(
            / * wegen news * /
            / * 'dd_googlesitemap' => '2.0.5-2.99.99', * /
        )*/
    ),/*
    'autoload' => array(
        'psr-4' => array(
            'ThomasWoehlke\\woehlke.org\\' => 'Classes',
        ),
    ),*/
);

