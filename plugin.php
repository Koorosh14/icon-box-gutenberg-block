<?php

/**
 * Plugin Name:     Icon Box Gutenberg Block
 * Plugin URI:      https://GitHub.com/Koorosh14/icon-box-gutenberg-block
 * Description:     Segal Afzar Nadin's interview task assignment.
 * Version:         1.0.0
 * Author:          Koorosh14
 * Author URI:      https://GitHub.com/Koorosh14/
 * Text Domain:     san-icon-box-block
 * Domain Path:     /languages
 */

use SanIconBoxBlock\Core;

if (!defined('ABSPATH')) return;

define('SANIBGB_VERSION', '1.0.0');
define('SANIBGB_FILE', __FILE__);
define('SANIBGB_URL', plugin_dir_url(SANIBGB_FILE));
define('SANIBGB_DIR', plugin_dir_path(SANIBGB_FILE));
define('SANIBGB_BASENAME', plugin_basename(SANIBGB_FILE));
define('SANIBGB_SETTINGS_SLUG', 'sanibgb');
define('SANIBGB_OPTIONS_KEY_DB_VERSION', 'sanibgb_db_version');

require_once 'vendor/autoload.php';
require_once 'functions.php';

function SANIBGB()
{
	return Core::getInstance();
}
SANIBGB();
