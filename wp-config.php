<?php

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
if ( (isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
$_SERVER[ "HTTPS" ] = "on";
break;
}
}
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'milanost86651');

/** MySQL database username */
define('DB_USER', 'milanost86651');

/** MySQL database password */
define('DB_PASSWORD', 'mila45975');

/** MySQL hostname */
define('DB_HOST', 'sql.milanosteopata.it');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'edz,wDtb;Ts?@J]~FI)K>G0/Ni}<|~WLKp&|kduf!ym3EWPE|!ISf~n,Gz2hh Zp');
 define('SECURE_AUTH_KEY',  'a$6mxi+74ZN^Xt:q<K4TktizWA|T&.zu]?X7kAbKlxyugwj_XPO.YwGOH[.`bp>)');
 define('LOGGED_IN_KEY',    'm_k14Q=Jh6xRc&|w8|?&ucYUUwD}Ib-.%`{%Yc*ll}D-h`?(,naH$>yaOG?rL/!N');
 define('NONCE_KEY',        'ck[~i=-Ny+_Ioqv:@- w-g4A7@8M7n}Vt/rpL4Gb|Rjr`vW1:-ok)!tI+}-38%=b');
 define('AUTH_SALT',        '_Oql<HS-2wR-._|PHN , kQ!-vJ,{4B![z*J[C%n[-ghBo|(6/WNGu>3:ej0`2v]');
 define('SECURE_AUTH_SALT', 'ma|BnXt9/){t<w]?5=:Wg;-}=LRx~^0pv6{x!++kdL?7(-6z3] QN>f+$[+YI67)');
 define('LOGGED_IN_SALT',   'D6Ga!/%,/hw+t%eC!ZiwmY@_icQb@~~npD@]30oV 5N[v%v}LNqnp;GaRXSv.q |');
 define('NONCE_SALT',       '|dgzr;U>7m+<Sz$/3V|KP_&ri8S[Rk+q-C?iu(/MX{^eir=tyklu?||naq`[=c_0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
