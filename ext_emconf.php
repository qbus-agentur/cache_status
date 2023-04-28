<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'cache_status',
    'description' => '',
    'category' => 'Adds a X-TYPO3-Cache header to indicate cache hits/misses',
    'author' => '',
    'author_email' => 'bfr@qbus.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.3.4',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-12.4.99',
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
