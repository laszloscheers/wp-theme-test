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


define('AUTH_KEY',         'iHFgInDPiI9cFsIGjowXpT0bIuAbzsvOmHO6P+pWibrWcmMD7P7Fao07WbXAX9ssioFfEMhBFSbQqRcc3mC3Bw==');
define('SECURE_AUTH_KEY',  'X1k+hKeZwLhGVt6vP0ySH/rTHF1kEP8A/C41SE9V4DIS71ddDiyVIjKpiP8pHE48t+qdXiztjHu9OFfYtEsAQg==');
define('LOGGED_IN_KEY',    '3Y3VWnnaubUd9tDNr7rUI7qQF+4bNca3X5mBhtQxFXBF5DjiTZa84iz1us22Q4EVJZqKeFfAudXG8os7W1cOsg==');
define('NONCE_KEY',        'LaX+eHleyIY3eKfPbh4uSB5WhMCDILoSRXPbceVOy+LDczafgEITV0QaYeBsaTO+l4NrkoQ3fiOkuNdujfgQqQ==');
define('AUTH_SALT',        'RfiN7DT48jjWOZPIKIeCv1DZvYMWI8momtEUyZhDfPo6Jz0qL+MsMF1jZdL12fFq002M8cCHkaLypfAZEI+RWA==');
define('SECURE_AUTH_SALT', 'xmsvuFwf2ZFhGgEREDxQ+bmC5ohhyjGE0dSsdwsBus+aIgV44TgaUipncWV6u5gXzXEQm3JU+KmND3jfXxpO1A==');
define('LOGGED_IN_SALT',   'WuLXEpiSxNM5Uktao4mn3we5dUu5TjHm6km5FA7o3C2aeMiZTLcyA6rEkBfHQvzgQrh3I1HfE9AAdHXJsZMdaQ==');
define('NONCE_SALT',       'zWh5kjCZJJls3qFUOEHc7Y+whclb8ZYZy7/j+lZ2iCCFDipgmmj6xwjrt3I0wg+llSm9Z8dQwNYRKXsONNR+hQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
