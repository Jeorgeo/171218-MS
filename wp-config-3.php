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
define('DB_NAME', 'h712153702_s3');

/** MySQL database username */
define('DB_USER', 'h712153702_u3');

/** MySQL database password */
define('DB_PASSWORD', 'whDPdsiaz-');

/** MySQL hostname */
define('DB_HOST', 'h712153702.mysql');

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
define('AUTH_KEY',         'j3fHskwWbR#s%SQic@cQXrUtnG^LMB^qe7Y55!k!*UZSk4gU40KEIhu!vUYN@f0z');
define('SECURE_AUTH_KEY',  'lG8aG7f0d^hWDmly4*U39t8qs5PR3CoTujh#zyVgTN!oT6OkG5KcysL2OBNw#^k^');
define('LOGGED_IN_KEY',    'iXlylbgx!Fzl@GNd92dKLfmhlZs1CoNJvV*w0Tb^0bqUpfzE3yOwyxh1ttIDQvRw');
define('NONCE_KEY',        'zoHYSZFOWqYpfMbsBShQ9hYBVQHb*H87#*FYyC9z92Lr8^sWfF93kX&#J9KrOn&h');
define('AUTH_SALT',        'q9dMNiWYLCzDy1Pl^mDZvoQL4T3qk@xgwCXW*UgexqSWh87P8Emu&AC0#^ulPgI6');
define('SECURE_AUTH_SALT', '8BGlTEzurwiaE*adoJKxkrSGrYcX2@wwpf^tAn8KwUVgwR@zUmKUzLXz64CH7mEA');
define('LOGGED_IN_SALT',   'SFk2rm4hZXgNsMpfj6NJ%!ANl!aSf3GdFFqwPZ9L(nT5vkvFaP0)uUjV@F111GJa');
define('NONCE_SALT',       '@fIpbXSgq^FKL65aW!UTPk0wql&1ZDHuB&SyVrS%fYRpJFz#ne6BVNlZlkJs8H9z');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cms_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>