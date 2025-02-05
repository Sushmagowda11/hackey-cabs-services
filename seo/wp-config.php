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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i8171169_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i8171169_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'J.GpcFKHLAv4KBtJKuc20' );

/** MySQL hostname */
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
define('AUTH_KEY',         'QzCjoQTvsgVF9mIXyWxloEFiINAVSkOldsgGjZGJiiiacX72Iv8n1RAzm21JIuEz');
define('SECURE_AUTH_KEY',  '4FA9pGVbDiDVzWlHOouY7LnQcSFF3I0OG2g8yDghpIZGKyBUTpJHi7HKTWc3pFv6');
define('LOGGED_IN_KEY',    '5rQaFtYeYFMqckRRak6FTdoYeYdSFvRJUtBlkmW5gEAp7QW9MrxIJFlvngPimHSO');
define('NONCE_KEY',        'MFfyKDGuEZwh7i3Mfv8LImdvGf42mJNf1jP6vh6XUHxl6SoOl7Rxi9knlSUUqcaT');
define('AUTH_SALT',        'eClqcVSmmB4nRhG5jUJ68n3j5mOLrXTY5PXHiL3MBcMIGtuXhtEnYJ7SUjUiVLvM');
define('SECURE_AUTH_SALT', '0m9Ip1xvNNWGqwSKWirmcrJEu1c8CUksQH7RFiaOuSdXrGHphpRTcgOKrLcrm1PC');
define('LOGGED_IN_SALT',   'GhbJRXXZpHswDXcrhZOV9bxiRz2y9USkdac773zI3n8Cgrrn6k5z6M7rI5xrlUms');
define('NONCE_SALT',       'nLO0ITnnoivyz42Np3eSkaVAHEfd5tmSd7SzGMIIdN9DxnS6EzdYkirEgyEyvCyL');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
