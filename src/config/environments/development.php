<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', true);

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);

// XXX Manual upload Elementor Pro - stale si to pyta FTP access na hosting danej website
// potrebujem to deaktivovat
// https://wordpress.stackexchange.com/questions/228591/to-perform-the-requested-action-wordpress-needs-to-access-your-web-server-pleas
Config::define('FS_METHOD', 'direct');
