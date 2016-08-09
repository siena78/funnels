<?php
define('WP_CACHE', TRUE);
ini_set('apc.cache_by_default', false);
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
define('DB_NAME', 'i2441315_wp1');

/** MySQL database username */
define('DB_USER', 'i2441315_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'F#2Mx[^RFA#7m]s0Ys^17@&2');

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
define('AUTH_KEY',         'kCYrFDgdTVf9Cz2dTiR2iLN1vmstNpMSJ7LQFjKDkajlRgMHaQEBMn7Tcz21WaLi');
define('SECURE_AUTH_KEY',  'OvTeCUWKVC7F257e2nUsA8w4iagLT5kc5MuTMIKdPyUlI1iFAW0ji1vGeqZ9ZaAw');
define('LOGGED_IN_KEY',    'Nj7RBhrSQb9y49FS0CkbTKjUzEdbeE1fRCAyIgK70ZUzM2AdwRXPNcN7osoT4DPN');
define('NONCE_KEY',        '7GsnYIeL6bUnBUi8VfKyay4PM3zn9I7dfKhRqHiDYrQkDy12KzNTmYlGSWMYANSe');
define('AUTH_SALT',        '2mRHqp2enftYG7qoV6dpLivKpOTM2t37febaRryAoNs3LlWunOrZsJ5FQwHUDuVY');
define('SECURE_AUTH_SALT', 'haXdBrSlVN6Cs8EbyV3WlnWmbfp3DGQDbMk5xbIxaVYqUQQGYTePXtuqAzAMI2k6');
define('LOGGED_IN_SALT',   '9uKpD57id8iZ2dn5wG3KMQLKDXlzUVXerixLRa5kmbpogPiWhesgXAztzER5EKoO');
define('NONCE_SALT',       'QVJ2wlnZvj8ToDvOhuwYB5LiEy7N10Er07AXcKVzGiJr4edSVVERdCurailbFmP9');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
