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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AqCZ9ChSEMGVpOButQDofuUTKS3jn5wD4EbsNDQX2T9Xq4JN6bSvI/tNrLUx3dvK8tZn/A3tJ3k5BI3Zi6zxHQ==');
define('SECURE_AUTH_KEY',  '7mTLIQu96zGMoFpUe3NB3M/bn2XiJCBspejhpmjN6mQtiFbRDnPH8nGeWW+PtjLRUxRC9mHl3rlZ1RkoRAY2yg==');
define('LOGGED_IN_KEY',    'oxr09qURWhNlUbmMmSmrOJMxTW6GQ0+n/hRBQTF+9ojzn5aKc0vg3eW74hKocqbDiUDbsckOq+h7EpO0WsRTNA==');
define('NONCE_KEY',        'UGJdFVwRj34N6ZnFeWqjxN3L9A9HBZM2Vsew3UQbLROAI3p8WB4wRnoksSeLUQWekRJtAK31cF8IFqimEZ2wOg==');
define('AUTH_SALT',        'LGLwNY4Uy7LEpLUMcgfUtLoXsvc6czv0/hhV1hm4tyq3KSD+EU6jPxbp8UMhso7fy+dQEqtoZzFoqmhtz4ogVA==');
define('SECURE_AUTH_SALT', 'iey9WfPl/RTO2ZR5T3/Q3+bHhzA6kBiHaxb4bOW43qHApsfbZZ4i72aRmkV97ONLOxTB7zQK6BIAJ3P2BCua4A==');
define('LOGGED_IN_SALT',   'AmNwCrH6WDHdAI9yxIOJ+NzGAtMS9b7ytjG80B2mWLKS0jROURZ7xhPJniYyjhoi63rNkNVwZIRu+VHFywFa/Q==');
define('NONCE_SALT',       'GMRIqXbvgqxr9Q2oJsmHOEh9x3WQKZqRk4vb+6gyKOLp5065m5lLi0W/9bSHHUpnleYbQIFtBh9XMS45wKwtcg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
