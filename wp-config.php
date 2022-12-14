<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'windows_style' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-X(mf8OiNk$t;A}4cr~k&n?0{awqkf3E6<i_ !BEjy(fD{.S:7o.6F`.$HTd6-GC' );
define( 'SECURE_AUTH_KEY',  'Q!s_wlUeX-BV~VPQBB0WDYW%x>/i !17.vtuy_oC.^DQh1vs1P}q^r]I/xynt@KH' );
define( 'LOGGED_IN_KEY',    'kOQ%>}+6:&qZI1i&d8<4{d|>*`>O!i?$=Z,S5Gk8Z<zR:ruS3wyENK*pkFSY?4A*' );
define( 'NONCE_KEY',        'xw{(wY^+UbC z@?Q=c6ed*PD,>t0+NL:6]6VFqPhOQ*S9U#@TkgH`_.jd& Q(!UB' );
define( 'AUTH_SALT',        'gD7_.9D[iv:Cch|7_I@DP.T2JT#wEI&$WoV6-pFH ^zfabY0l`7TwJXq/xEZ((}+' );
define( 'SECURE_AUTH_SALT', ':t?>&qi.^y06Y!,dp&nqk+$k:(Q7m`m=1ZM| N6UTt4ZQKC4?;,y[HmZ`E.dbIxy' );
define( 'LOGGED_IN_SALT',   'V!`_uAGKMt)jKPqQjKoLX7j.Z]JvOW|S$fi2|fw~$^D:[$6;KeqmD]j2wS]UhXS!' );
define( 'NONCE_SALT',       '`j#//2U?DxEpWv^d~N;JE1;Gz5vIo)Z!HX83lf_,]vUl~#^9fpFVo+@/uAC,q-gn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
