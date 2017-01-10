<?php

/**
 * Based on WordPress' wp_get_mu_plugins()
 */
function dwd_get_real_mu_plugins( $directory ) {
    $mu_plugins = array();
	if ( !is_dir( $directory ) ) {
		return $mu_plugins;
    }
	if ( ! $dh = opendir( $directory ) ) {
        return $mu_plugins;
    }
	while ( ( $plugin = readdir( $dh ) ) !== false ) {
        if ( substr( $plugin, -4 ) == '.php' ) {
			$mu_plugins[] = $directory . '/' . $plugin;
        }
	}
	closedir( $dh );
	sort( $mu_plugins );

	return $mu_plugins;
}

$mu_plugins = dwd_get_real_mu_plugins( WP_CONTENT_DIR . "/mu-plugins" );
foreach( $mu_plugins as $mu_plugin ) {
    include $mu_plugin;
}
unset( $mu_plugins );
