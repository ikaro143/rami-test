<?php
/**
 * Plugin Name: Rami test
 * Plugin URI: https://webreadynow.com/
 * Description: This a test to show plugin works
 * Version: 5.1.0
 * Author: Ramiro
 * Author URI: https://woocommerce.com
 * Text Domain: rami
 * Domain Path: /i18n/languages/
 * Requires at least: 5.4
 * Requires PHP: 7.0
 *
 * @package WooCommerce
 */


defined('ABSPATH') or die('You do not have access, sally human!!!');

define('WRMM_PLUGIN_VERSION', '1.0.0');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}
//Change WRPL for plugin's initials
define('RAMI_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RAMI_PLUGIN_URL', plugin_dir_url(__FILE__));
define('RAMI_ADMIN_URL', get_admin_url());
define('RAMI_PLUGIN_DIR_BASENAME', dirname(plugin_basename(__FILE__)));


//include the helpers
include 'inc/utils/helpers.php';

if (class_exists('Rami\\Inc\\Init')) {
    register_activation_hook(__FILE__, array('Rami\\Inc\\Base\\Activate', 'activate'));
    Rami\Inc\Init::register_services();
}

?>


<?php


