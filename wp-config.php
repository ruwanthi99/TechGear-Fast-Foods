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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=&{*/sCsny8Hhrme*O_W9w*^G-Ony=^*Z>|EuhE$GFEJ>rYeJaplFP`1}cK! ,0<' );
define( 'SECURE_AUTH_KEY',  ' 4%>kVnEk`Q=}SrqjUM,}M][~(h4n2=KTO=_@gVt@[_4?oNmg~V&)@)0]G+7}~i]' );
define( 'LOGGED_IN_KEY',    'dhdyDvq85J!_)DvVi38& ~VZ.RNgJ0_e=f&f)?FT,SiCO5byVOd((Lui9-9b;<P%' );
define( 'NONCE_KEY',        'oy=gg6.HL62?EX.|~eF>2?|wlIU;6(K(pk^|YYES>^K77V~LXSmeSx5UU]799L)-' );
define( 'AUTH_SALT',        '&:Noj1GQy$q_WsFX.kzzghZ:?.Tv^B7Ke1=/s7<$//[5E>y13qE[Hc]<(?mQ7@t@' );
define( 'SECURE_AUTH_SALT', '|3X m${@[C@x@MlF6zni[S[|5AWkIA4.&]>>-Q|x#N-4pE,2ugk(-SJ#~AM7R_LJ' );
define( 'LOGGED_IN_SALT',   'XOtBp,WZ{AjH]PW TooT1rzk;q!x>:z*eGwG8?6vh7Q{|^kn(xC&nB<6q;BrnAU,' );
define( 'NONCE_SALT',       '(mzp|Y/L!QMl3<UfaB_?TiY$#L@1u5A +L|DnL|nG=2UuhE$}NMM~.]SE4xyP)GN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
