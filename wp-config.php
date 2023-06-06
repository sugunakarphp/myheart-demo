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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '[NE,m7HPXGu+~Rkdawwe8YxGW.)g4~ +x7/|uc2/ZHd4Agj{!3As.b@K`9 vMgCE' );
define( 'SECURE_AUTH_KEY',  'or1fW=9TZgi=Tx+^7g2Wdv/J)aVwMZIdyMWhjGof_3<$ldVwmP7jMpwLlU(Xg2+e' );
define( 'LOGGED_IN_KEY',    'qZBrJUIVzA-pli(?)WtaUhrDdMeCu>itkw(/g]ctYU`SB(,nj7Dah#WnzEi(2*Yl' );
define( 'NONCE_KEY',        'F|A`Wg)K3E9=-HmR^.e(MQroy]q.uhcL5iXXwP=!LQj+Aw3w]%6sNhsIpTc Rn`3' );
define( 'AUTH_SALT',        'SXlW9OU -{nu-](sTVSWvUocO2@Zq?0/z!1{~550W?(-QwQ`On`/P}U^zc:2=Ju|' );
define( 'SECURE_AUTH_SALT', 'qP(RCl.%fwc_0LN!S/Qw9[Qe|SD3}U8xx^7#ux7$KvB)$4?[XX]M`G1v&PjA%-RS' );
define( 'LOGGED_IN_SALT',   'WJ%6d.=|W:]{Y740_Y[I0VjsiOosq^R6/cU$ORPYX6SDx<*9z.]Bx>5glU$qE1l@' );
define( 'NONCE_SALT',       '7H0$rpd-XK&h#kZf$+~JO+[!rTciITP1I,y1zIlE&Ol(7kS+VpN|yrBmSko`dkv-' );

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
