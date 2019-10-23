<?php
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
define('SAVEQUERIES',true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JRcRz8m7HB}2))r04oPC%.I<b$j#69fY^RJq:4S>9aQ[O(3Y3MY=@R#3v1C_m(,M' );
define( 'SECURE_AUTH_KEY',  'Ko1.e.#r&2>Sq9~IsPuPTqO+/?KPK#_RxMt$<vbG=$@$So}*42yX*_A|y@tCet]e' );
define( 'LOGGED_IN_KEY',    'Yd`>%l%3)XZV_8VBl]_==mYa)U*e}VuBE1^HG}AcorEB=A)SXa~CrG}1Ztul,Av}' );
define( 'NONCE_KEY',        'N[tk|wt}1oJ5>rsWl4&gYJAom-kU3gYH<aL+Twynw;J*l/BeA2}B*66*aGwt.e(k' );
define( 'AUTH_SALT',        '>8s.#tptTA;QB]Rb1L+@tQRLCi((]]KT&o5Vi^Ys5GtJ<HMAaTCY]$[zkaO?MDF{' );
define( 'SECURE_AUTH_SALT', 'HKqQ9[+jh3nAtZAC6E$@)g^qX`G,[((Lhm!#<My|QA>tM-m]<m_pTGWvsIO-tt^R' );
define( 'LOGGED_IN_SALT',   'yCt+=$}PEP8$!f Df3,PZH&Sz)]>U+0,T@6=pY5FqIn$B$0a+WyC-zRg+yp*xV4!' );
define( 'NONCE_SALT',       '=h`8f3M($Y(QRjotI}&EQ>S{J}y!}q%6|fz0XR/Yu5U%6RZQ)oLw&AV.h=WA>K>E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
