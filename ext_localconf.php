<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output']['cache_status'] =
    \Qbus\CacheStatus\Hooks\DebugTypo3CacheHit::class . '->debug';
