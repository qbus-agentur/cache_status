<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (!(class_exists(\TYPO3\CMS\Core\Information\Typo3Version::class) &&
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getMajorVersion() >= 10)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output']['cache_status'] =
        \Qbus\CacheStatus\Hooks\DebugTypo3CacheHit::class . '->debug';
}
