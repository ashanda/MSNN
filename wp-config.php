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
define( 'DB_NAME', 'bzyyummy_msnn' );

/** MySQL database username */
define( 'DB_USER', 'bzyyummy_msnn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FV=R.KUwrd7z' );

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
define( 'AUTH_KEY',         'ftvRRGrskKaBnkpuGaEqEF7vR0CIzJlYvP4CzRHzCzspkKduqOwrqglp9LYELHhZ' );
define( 'SECURE_AUTH_KEY',  'hL5nqUjRALzZglgidgSqMr9QTmvTCEucN20HudLL7as6kArvsT3FtTyrfMVnyvtC' );
define( 'LOGGED_IN_KEY',    'XWT7A2VWgzFPHYxfLS1liBGM75NHGlisxT274fHCxQJuK23baDqEvwbzF44oNmpl' );
define( 'NONCE_KEY',        'P6Lg02Aifi8eJTdV3WtuG1LRiBMYsg74LG8C1TNcZE9jG4SButHt1kXPyUUaayFP' );
define( 'AUTH_SALT',        'DzWgVJye9JMseoqmpcPTMEEdaRc6kLzdauO60GvxsLvZMxYLXCFmGplnXTwl0i04' );
define( 'SECURE_AUTH_SALT', 'IxcUhf84v4Z3FQJqP70CcaRgylDqh64ThFkcRUXYV5yOCVW2QouwzKW7zMIEjy8W' );
define( 'LOGGED_IN_SALT',   'ME8ue9QFOJN2l6OQNCWZtPttKHiaMdRQYmDNaccho3553x40OkEdxJPuWeh0N6Hc' );
define( 'NONCE_SALT',       '2L5uATCyrlXzCEi2ty3zDICOXREoZzG00YbvR9CjS9JKYJpZomHKYTR1MhzpoWAe' );

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
