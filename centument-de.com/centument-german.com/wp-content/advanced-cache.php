<?php
/**
 * Advanced cache stub.
 *
 * @since 150422 Rewrite.
 */
namespace WebSharks\ZenCache;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
if (!defined('ZENCACHE_PLUGIN_FILE')) {
    /**
     * Plugin file path.
     *
     * @since 140725 Reorganizing class members.
     *
     * @var string Absolute server path to QC plugin file.
     */
    define('ZENCACHE_PLUGIN_FILE', WP_CONTENT_DIR.'/plugins/zencache/zencache.php');
}
if (defined('WP_DEBUG') && WP_DEBUG) {
    if ((include_once(dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/stub.php')) === false) {
      return; // Unable to find stub. Fail softly w/ PHP warning.
    }
} elseif ((@include_once(dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/stub.php')) === false) {
    return; // Unable to find stub. Fail softly.
}
if (defined('WP_DEBUG') && WP_DEBUG) {
    if ((@include_once(dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/functions/wp-cache-postload.php')) === false) {
      return; // Unable to find postload function(s). Fail softly w/ PHP warning.
    }
} elseif ((@include_once(dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/functions/wp-cache-postload.php')) === false) {
    return; // Unable to find postload function(s). Fail softly.
}
AdvCacheBackCompat::quickCacheConstants();
AdvCacheBackCompat::qcRequestVars();

if (!defined('ZENCACHE_PRO')) {
    /**
     * ZenCache Pro flag.
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_PRO', IS_PRO);
}
if (!defined('ZENCACHE_ENABLE')) {
    /**
     * Is ZenCache enabled?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_ENABLE', '1');
}
if (!defined('ZENCACHE_DEBUGGING_ENABLE')) {
    /**
     * Is ZenCache debugging enabled?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_DEBUGGING_ENABLE', '1');
}
if (!defined('ZENCACHE_ALLOW_BROWSER_CACHE')) {
    /**
     * Allow browsers to cache each document?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     *
     * @note If this is a `FALSE` (or an empty) value; ZenCache will send no-cache headers.
     *    If `TRUE`, ZenCache will NOT send no-cache headers.
     */
    define('ZENCACHE_ALLOW_BROWSER_CACHE', '0');
}
if (!defined('ZENCACHE_GET_REQUESTS')) {
    /**
     * Cache `$_GET` requests w/ a query string?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_GET_REQUESTS', '0');
}
if (!defined('ZENCACHE_CACHE_404_REQUESTS')) {
    /**
     * Cache 404 errors?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_CACHE_404_REQUESTS', '0');
}
if (!defined('ZENCACHE_CACHE_NONCE_VALUES')) {
    /**
     * Cache HTML containing nonce values?
     *
     * @since 160103 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_CACHE_NONCE_VALUES', '0');
}
if (!defined('ZENCACHE_CACHE_NONCE_VALUES_WHEN_LOGGED_IN')) {
    /**
     * Cache HTML containing nonce values for Logged-In Users?
     *
     * @since 160103 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_CACHE_NONCE_VALUES_WHEN_LOGGED_IN', '0');
}
if (!defined('ZENCACHE_FEEDS_ENABLE')) {
    /**
     * Cache XML/RSS/Atom feeds?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_FEEDS_ENABLE', '0');
}

if (!defined('ZENCACHE_DIR')) {
    /**
     * Directory used to store cache files; relative to `WP_CONTENT_DIR`.
     *
     * @since 140422 First documented version.
     *
     * @var string Absolute server directory path.
     */
    define('ZENCACHE_DIR', WP_CONTENT_DIR.'/'.'cache/zencache/cache');
}
if (!defined('ZENCACHE_MAX_AGE')) {
    /**
     * Cache expiration time.
     *
     * @since 140422 First documented version.
     *
     * @var string Anything compatible with PHP's {@link \strtotime()}.
     */
    define('ZENCACHE_MAX_AGE', '7 days');
}

if (!defined('ZENCACHE_EXCLUDE_URIS')) {
    /**
     * URI exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_URIS', '');
}
if (!defined('ZENCACHE_EXCLUDE_CLIENT_SIDE_URIS')) {
    /**
     * Client-side URI exclusions.
     *
     * @since 151220 Adding support for client-side URI exclusions.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_CLIENT_SIDE_URIS', '');
}
if (!defined('ZENCACHE_EXCLUDE_REFS')) {
    /**
     * HTTP referrer exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_REFS', '');
}
if (!defined('ZENCACHE_EXCLUDE_AGENTS')) {
    /**
     * HTTP user-agent exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_AGENTS', '/(?:w3c_validator)/i');
}
if (!defined('ZENCACHE_404_CACHE_FILENAME')) {
    /**
     * 404 file name (if applicable).
     *
     * @since 140422 First documented version.
     *
     * @var string A unique file name that will not conflict with real paths.
     *    This should NOT include the extension; basename only please.
     */
    define('ZENCACHE_404_CACHE_FILENAME', '----404----');
}















$GLOBALS[GLOBAL_NS.'_advanced_cache']  = new AdvancedCache();
$GLOBALS[GLOBAL_NS.'__advanced_cache'] = &$GLOBALS[GLOBAL_NS.'_advanced_cache'];
if (!isset($GLOBALS['quick_cache__advanced_cache'])) {
    $GLOBALS['quick_cache__advanced_cache'] = &$GLOBALS[GLOBAL_NS.'_advanced_cache'];
}
