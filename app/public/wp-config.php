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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':/])S@BN_,()L724:xN5/$4_2CC)Tj<-hR`FNs/jNJ@a4_s^N2}!9,3pM7MVU,sH' );
define( 'SECURE_AUTH_KEY',   'b8&;YX|GBg &b0r5NJwL8P%.&&?ZJ(7~Mi:.|RQT&k%i] P<VF72c7qN].Hy`j;H' );
define( 'LOGGED_IN_KEY',     'SU[iA&}[h:{uiCK# i*>I9mDA%rAA)9}uL5fyUF5ZQ)GeiTtD#O562M}1/G%G2%a' );
define( 'NONCE_KEY',         'g5Y`A(.`Obn]8,s05X?~gRgqC> _-p:h`|}kbfMLMsh%>qyY@8.Gx.8iP] KZO<?' );
define( 'AUTH_SALT',         'n(`Wu[Gg6}o*Bl2utZ%Fh8}42jb?DBfP7^!kKK$&cz*w;_)9^>$d1qO[S|rFe!^r' );
define( 'SECURE_AUTH_SALT',  'VYuLMnZlO?7raLz&r,*>1RsBP@`Y4RAI&kNhhEOs9i@Rg%r9`wHNyS`7=s<;&:zU' );
define( 'LOGGED_IN_SALT',    'uII iQ@<HB&$`6AO>y3+RiwVdz_%JgezX*2Ys,Qy*Z{R^~z{dKvfd^o{aNY7)??/' );
define( 'NONCE_SALT',        'g04zZ@_g)2JYW6^,W^7[R].oJJtt)CPx}k8C~gr5}+^6)Qx9(jkHIsV )-*@:0e>' );
define( 'WP_CACHE_KEY_SALT', 'plg}0L|=j$}[9b8g)vcZr-yjraS?C=,2G>ChQQ@^sph6danBtQ cYxsQNAa^QK /' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
