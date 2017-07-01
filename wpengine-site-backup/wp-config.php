<?php
# Database Configuration
define( 'DB_NAME', 'wp_openhatch' );
define( 'DB_USER', 'openhatch' );
define( 'DB_PASSWORD', 'TUKwKTSnT7JONo1v' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', 'BXKp+q7SnIjPe2>RZa!oZ25X[n`f|aj,_%(N qoDbj[r3$Z)RIQv#D;2klk+U+C*' );
define( 'SECURE_AUTH_KEY', '[4<<b0sR<CI9i5sB$w=[5bGdW0j3;#=@;4@eg>F<643--nG~}x@!H:SS+4{)-ux+' );
define( 'LOGGED_IN_KEY', 'RCs-60uRXX=;{Z;t.YK]09Gt6}9~c>972x9zK)L6u|@FFPPNKh+OI%&C(LIeLJ//' );
define( 'NONCE_KEY', 'N-<T#w;&b}~Cr,DU@WJ~j )m;-40hC|F*)[o/{xHF@6{nG-+jk0tsiKR7 *bS2o[' );
define( 'AUTH_SALT', '"!|%5Jg(f!KET;D5l*tBh$WTOHlzzdEN|H{EV)[EL,%wu;Q3*7[h5*>iqWEw@_1^' );
define( 'SECURE_AUTH_SALT', 'A0K[YMUNX)^o(m>VkC}-.=vdXaU.Uk8H8|FkN~Oo7^="3k0-$Fx/u~i~<>+M_Vu ' );
define( 'LOGGED_IN_SALT', 't0RLLUZM(x^KA$f@]FCbEVT^A@>zg@MBY*XkdbX`LsEVe BO(CM+/Z(^H!cm5rIT' );
define( 'NONCE_SALT', ':~DtsmH!!4].<4BsSo8smLZ@-M+yCdo$%XnW$/F[FC ZW*c?06=K=:OvTU-u1fS!' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'openhatch' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '1f0fea0d4a5d40feb089d52c906e5f561f95a73d' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100007' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'blog.openhatch.org', 1 => 'openhatch.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100007', );

$wpe_special_ips=array ( 0 => '104.154.117.56', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define( 'WPLANG', '' );



# WP Engine Settings





define( 'WPE_CACHE_TYPE', 'standard' );



























/*SSLSTART*/
if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/



# Custom Settings












$_wpe_preamble_path = null;



# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

$_wpe_preamble_path = null; if(false){}
