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
define('DB_NAME', 'englinton-medical');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'NBPjG!Edk;isi!TL@%MA$3>Ct1oko?|CWGuW]c5;-h.6`@wEua2Wbe4,`y4b M_;');
define('SECURE_AUTH_KEY',  '4o^Slqye47qK|z#OWeo{Bh< ~0sD;=5)-%S7;0.Zm~R[Ex^|27`vME[*0dvx<>Ps');
define('LOGGED_IN_KEY',    'tPPu7!sFo%]Co3Sdb-a&h}[V(HZ7[V%|2F{(m=B9?6to|aqj/8UV6k+Pe+a(Du1A');
define('NONCE_KEY',        'ge*BXWxsCoOsvwU42~AaJ8-dUc3m5uuw3AhRz]&6dszYB}.s;!R=8HJ,rQj^mgX4');
define('AUTH_SALT',        'B;ipx{u:l_ao/]ahsCP5w0zmah#6+DLqp0#,T:OT^tm*Rkui9QUZ5PkobZFr`~@4');
define('SECURE_AUTH_SALT', 'W^f#z38!2>1Dlsf@:B86ZD)b9m<6^O+$zAdVoq^?Uq@/wW`S!vBIfrY-]$~Jqa-4');
define('LOGGED_IN_SALT',   'XLp_fL8G}pg`oN?)Qf4?ovAR$Slv/!2ZqyIWYpN? u{{A@MS<8AfDu>*&u9!$`54');
define('NONCE_SALT',       'M.6IFz}:)_cl.J,3NEG9omB= %eDNs.ZVX(4y61nYr)y$$rL&XGY@vv^ILsyIv}}');

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
