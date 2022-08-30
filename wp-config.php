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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'HrB24gfJ92zywynPxnf2R5nnjWh4vmo76D4vOxJ3BBlXzW2yoeE3z38sHB1ykOlG' );
define( 'SECURE_AUTH_KEY',  'ik7x5gf9uRLRexRLrQyaGsvimIaeepC1sboqNZNZlVJL5Y9ei07pz1PSNUAln3zW' );
define( 'LOGGED_IN_KEY',    '6DJeIqj4sDJGUOfuBJsHH9kY6WJmaav368qVwZPN3YzIL9sMPYGqSxD6vY4BzsLR' );
define( 'NONCE_KEY',        '4UqmKureJl55dp4Wu5HrB3GMOZ1XP0orbXGwBE3lJax7WR44ZUaiDezqHDfBTehy' );
define( 'AUTH_SALT',        'hQP3YIj7rjyeGLJoYEl0FWKrS9vc7LBDBGzfQOMQsdG4sJEhEDPXHQ2BQLnVHMTg' );
define( 'SECURE_AUTH_SALT', 'D5BZNwyPmTBLeZklfRdkklaxBO9KdauJFlh2GJjPbGThDEKZ4K6woTdbZB1ogd3u' );
define( 'LOGGED_IN_SALT',   'pcGnkaIJp2Tb65VlepHZg2Vwb1SSdcMEwoFyXZG87GdvTsjVFhiFjSr41KkIGkW7' );
define( 'NONCE_SALT',       'aeTfkoVb204tD9ypnULZPMZJ5tEXdflbXn24V8IFRNdavjOcgrYpSEBfke1t0a7v' );

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
