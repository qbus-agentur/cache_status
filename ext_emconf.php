<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'cache_status',
    'description' => '',
    'category' => '',
    'author' => '',
    'author_email' => 'bfr@qbus.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.5.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Qbus\\CacheStatus\\' => 'Classes',
        ),
    ),
);
