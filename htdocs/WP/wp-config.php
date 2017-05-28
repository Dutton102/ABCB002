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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'LWG06QbyO!yOGlJV#4zzDc&*lhZ)HR19dhAF9!O71C5ueJx71dymb@^pFXieAcUj');
define('SECURE_AUTH_KEY',  'n9YgLPT81hU#C@2@xqOiGCwxLesVjM)yNvlo528D4ET!NW@C1MXLPL*Ng2E%KO&%');
define('LOGGED_IN_KEY',    '%BErBa3db8sjdX(JP9VbB9eAV3EUs3VRhy^6r8VP@Bo9&nHOA8NRqn8AByoJLMAp');
define('NONCE_KEY',        'O6p#DS0%gt7UOFQPcAbA^lLNRmsoI4ia&UJ(AghgqhU9y*HyBHJa%*^Z%FrOtMot');
define('AUTH_SALT',        'OokAR!IpdDF8tloXW0lDhXVfa5L2rkL7bAtQxkUUOM#tOQOfi9ceS7RKiXBwhMXs');
define('SECURE_AUTH_SALT', 'sFH(&d0Zh7UqvoCq1Ze)J5b4*fqCW0u33@qRa^b7xlJaS2rmdCCEzLudn)*utF%N');
define('LOGGED_IN_SALT',   'YiFYK5B*5wZiVFQ&cx!TOZ!EiEe&KKiFf^E!oq7S@#n1YUI@yfJr2xC#20#&*vZl');
define('NONCE_SALT',       'MoSDS%JMx&zgghlJP#LNCxJ#HOB9VPLubo*rWW(1Hn)o0WQTpdx3X*&IKFOYEW1e');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_9a11281a40_wp_';

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