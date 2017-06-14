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
define('DB_NAME', 'phpdesignwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'V}+)(xaUg`%CB^!tx+>mUPtq,!}o|/43.gvDFf6GmN7e>Qrup@~Q8n&7U4u{#3-1');
define('SECURE_AUTH_KEY',  'y6:n}fcGhTc_mZQs<deWy,b.f@c7LH[@E3`_{>n|:qH(g2(3@)*55bmV?$FN$&QS');
define('LOGGED_IN_KEY',    '[yj{2iTxSKKq]WF^kwuz(z*F;H$(36VWt,n&=!#yr0ba2v:!#Bp>%(9c)Iqy|bYL');
define('NONCE_KEY',        '?yDUy/BQuv3bMesp$&EM58A /@9;W/LHj=zG?Kx}Hf@Xo>_-C!6HFI!5$%9Z77zw');
define('AUTH_SALT',        '6900[i=e[q:F(=GPt>Q_-FQ{/@1u35ZTSPv|PiSW#>W%wUVRp4^V.pri-`!]2uJ}');
define('SECURE_AUTH_SALT', 'N%:CF>H*}JJ}zq!d?!V.9KZB49c/r%_-$2Xl8$..$Zimca>%biRdwcbmIXRMiXwo');
define('LOGGED_IN_SALT',   'R8FV#AM#dZCP>>]N3-ZZa~z9Q)K*GDOt&FGgk$!DL4{H7!bBF@ZImzSI$zqKh{-A');
define('NONCE_SALT',       '%Y:JC%r.#LioQwEyI]!mfYIykIybGQlV%D;S{jsFCCNXWfUs>BLs%E8-eksp(sDE');

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
