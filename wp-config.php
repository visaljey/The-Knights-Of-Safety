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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D E];82VO])1gUS8DwlI%39uFxx1tH<7RK>~w>^&A{Wsx=h={rt/98&p0^P?pHTQ' );
define( 'SECURE_AUTH_KEY',  '6Lept!X5ISpFG:e/cnuqVQU{]0XA%`ZA&MCBf-qCng8UntY(<?terT?.>dmi^m6}' );
define( 'LOGGED_IN_KEY',    '7,{e^R3E<)$:u-:_+`@F<$%6fH)j5XW7l5%yMJ*wiOzj`N7|43(tVA/MU0;r<H04' );
define( 'NONCE_KEY',        '#mZbJ;z2wRT=A%G23Oi3zb2~i|{d!5E2/~cUc)mcsW)WZo*QI:lYO1+?[vrW4n>r' );
define( 'AUTH_SALT',        '9}rejJQLN S1$T+vC8P?3jagcVe`^:xs,a.i$z;p}$;p8+m[57>d7//>u>)E;k3:' );
define( 'SECURE_AUTH_SALT', '05TNdj6;8kTog3E6I7EEA)9<MJ&zs5a!Cq0^XXaRqBZ}AI`!wj_.zDi4U#8EIskR' );
define( 'LOGGED_IN_SALT',   'S.Y-v1$Bvty_/>.L3LdBsU;Ik3iyDbHM1hp=329uS-9-4`(tQJuz!2vp@@?6Z9^^' );
define( 'NONCE_SALT',       'r?-[wJk-,_~Tq>Imvz;fNF|OQvmg5S9_)=4:`P!CH@DF$@d~>)L{QeE1oTsb-VL<' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
