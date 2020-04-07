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
    public function hitCache($pObj)
    {
        return call_user_func(\Closure::bind(function() use ($pObj) {
            return $pObj->cacheContentFlag;
        }, null, $pObj));
    }

    /**
     * @return void
     */
    public function debug($params, $pObj)
    {
        if ($this->hitCache($pObj)) {
            header('X-TYPO3-Cache: HIT');
        } else {
            header('X-TYPO3-Cache: MISS');
        }
    }
}
