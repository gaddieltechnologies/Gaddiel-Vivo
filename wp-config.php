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
define('DB_NAME', 'i1989109_wp2');

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
define('AUTH_KEY',         'jf29r6Jg1g7RZTR55mFO54awaN0kj3w7ETWEMfDIvFNVNOweHWZ9WlRGJQZidiX0');
define('SECURE_AUTH_KEY',  'RJJLZkhvE8PNK6Axe0VtmsxGkmem14glI94eUCKlVOKFy1W5U8ZEShT4SsKmltRW');
define('LOGGED_IN_KEY',    'PQCZXUvIg7m9zd82lFB7K6fOcqs6SU1Cfn6iXVwTeaWDkl9qINT9Bh7kEdoB9GeA');
define('NONCE_KEY',        'sG3A6JbPWu3w5OMmIsWuAr2m9hLRMqK0tQRuDwuEcBawdCO063gDt3c9qnQzUt1p');
define('AUTH_SALT',        'zo5uAnfaCyuhsOqJfj4jM3h1VVva6Pni52CpgjUUQbHV4muMw0p8KIIGoRRBAeSZ');
define('SECURE_AUTH_SALT', 'saewhdequ4JZfy19PTLHSLmCyPp5n50ZBGE2R1sP5DmHx0afQdvaeMVkwZ0ZOkRN');
define('LOGGED_IN_SALT',   'Dx3vQugObVSovDZ6gtQ6LkP4ZBI7DsPBWHxdj1A6wf7ycTyHKRTmoJAIBBM6z5IW');
define('NONCE_SALT',       'ntzcbEN72oIr75GAAFZnHj0YVrQigFE8jwvQeUVNMOYWkFclHQgTTZxTTrMca95V');

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
