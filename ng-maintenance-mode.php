<?php
/*
 * Plugin Name: RIQ Page de Maintenance
 * Plugin URI: http://www.reseauiq.qc.ca/fr-ca/
 * Description: Afficher une page de maintenance pour le blogue reseauiq.
 * Version: 1.0
 * Author: Adil Addiya
 * License: GPL2
 *
 * @package ng-maintenance-mode
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license GPL2+
*/

/**
 * RIQ Page de Maintenance 
 *
 * @return void
 */
function ng_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ng_maintenance_mode' );
