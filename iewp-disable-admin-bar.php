<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 * Plugin Name: IEWP Disable Admin Bar
 * Plugin URI: https://github.com/corenominal/iewp-disable-admin-bar
 * Description: A single purpose WordPress plugin, disables the admin bar for all users.
 * Author: Philip Newborough
 * Version: 0.0.1
 * Author URI: https://corenominal.org
 */

/**
 * Disable the admin bar for all users
 */
show_admin_bar( false );
