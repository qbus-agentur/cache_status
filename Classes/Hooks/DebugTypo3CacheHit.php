<?php
namespace Qbus\CacheStatus\Hooks;

/**
 * DebugTypo3CacheHit
 *
 * @author Benjamin Franzke <bfr@qbus.de>
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class DebugTypo3CacheHit
{
    /**
     * @return void
     */
    public function debug($params, $pObj)
    {
        if ($pObj->cacheContentFlag) {
            header('X-TYPO3-Cache: HIT');
        } else {
            header('X-TYPO3-Cache: MISS');
        }
    }
}
