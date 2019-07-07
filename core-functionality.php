<?php
/**
 * Plugin Name: TKM Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>It should always be activated</strong>.
 * Version:     1.2.1
 * Text Domain: tkm-functionality
 * Author:      Tal Katz TKMedia.co.il
 * Domain Path: /languages/

 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    CoreFunctionality
 * @since      1.0.0
 * @copyright  Copyright (c) 2019, Tal Katz TKMedia.co.il
 * @license    GPL-2.0+
 */
// Plugin directory
define( 'TKM_DIR' , plugin_dir_path( __FILE__ ) );
require_once( TKM_DIR . '/inc/general.php' );
require_once( TKM_DIR . '/inc/wordpress-cleanup.php' );
require_once( TKM_DIR . '/inc/kill-trackbacks.php' );
require_once( TKM_DIR . '/inc/acf-options.php' );
require_once( TKM_DIR . '/inc/acf-blocks.php' );
require_once( TKM_DIR . '/inc/acf-archive.php' );
require_once( TKM_DIR . '/inc/acf-masthead.php' );

// Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'tkm_acf_settings_show_admin');
function tkm_acf_settings_show_admin( $show_admin ) {
    return false;
}

function load_plugin_textdomain() {
  load_plugin_textdomain( 'tkm-functionality', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'load_plugin_textdomain' );