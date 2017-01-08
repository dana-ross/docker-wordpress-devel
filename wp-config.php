<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */
//phpinfo();die();
/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'wordpress' );
define( 'DB_PASSWORD', 'wordpress' );
define( 'DB_HOST',     'mariadb' );
define( 'DB_CHARSET',  'utf8mb4' );

/* MySQL database table prefix. */
$table_prefix = 'wp_';

/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'BrKcgqr>#EA+c:*|`l/bC2T[mD}?xWC|!2(CU`GUs=6WPrl67C0dM+?7Skc0TG$;');
define('SECURE_AUTH_KEY',  'S?[|Ja|6:{o_9|y%,(&d65#D>q/+`HkZn_Djyc9itp{/Vr5dV5i``D6;5jH&,Jaq');
define('LOGGED_IN_KEY',    'xqp}v+pWk7Bo7MD;-lb4+]DU|+/dO$g0/Ed3Zm]+KX-E%UdYU|QKFdVXilkAcP7[');
define('NONCE_KEY',        'O#(fwPEucw-2nD,<95B !=HQH{COBihH-owArPV+PA!$cuG}x{TfR#xm`. u22_#');
define('AUTH_SALT',        'c%!qYA%.Y 36-Nlw$,K706eGi$:`)7WeN=-IS]qkx01wM{+O{(@KQlLaoYTr[ZYV');
define('SECURE_AUTH_SALT', '|(j.;KYei8)gyT2NtWA&PIoI+Fo2f#9FqZRmd|BJ*q,-/TuHr#.%>,=KU-@WKre5');
define('LOGGED_IN_SALT',   '*~$T|W*l3JqIF|v*>$UKA`A+#1?q&p-q~62xVc|6[qp]k4ZjO)Hzku)=AuD>!cM=');
define('NONCE_SALT',       '++A;z8#OVW?kve t.#,+1=tx]g58q_c>0`p`ohI&!ac7&8+2,Qi-x:?hVt]TVV_x');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define( 'WP_CONTENT_DIR', dirname(__FILE__) . "/wp-content" );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

define( 'WP_DEBUG', false );
define( 'SCRIPT_DEBUG', false );

//global $memcached_servers;
$memcached_servers = array('default' => array('memcached:11211'));
define( 'WP_CACHE', true );

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');