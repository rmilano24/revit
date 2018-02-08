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
define('DB_NAME', 'revit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yD&Q5FI/Fx(Ch5#FJwYUa$~g~jVjCc6~GJS8/s5@%&3XqaKp9`l$]8A=CM}mXy n');
define('SECURE_AUTH_KEY',  'h`e4zt.n.-&YNQj{=>WB%kU:wgV/GEu-o>ygnFIDx!5+p#pG9OoW(BSutgRk*Dsf');
define('LOGGED_IN_KEY',    'H9Zp?zanrvDMbM]-q@872W!-PL9*6WF@)lV).n69AV=UfT1zPuf^=/3ao],I4-tG');
define('NONCE_KEY',        'T}M-^%M/=ECc7-hFs7wrcTU<#bslOSOjh(O+%K:i?H$k+uP{-&S}Dl~]7C/InAq*');
define('AUTH_SALT',        '4!chDj?E~l%~=d-)H6%LKH<|w8Rnxot5%>}b4)pesbf&AEJb`l2{;xi/6;hUwH<z');
define('SECURE_AUTH_SALT', 'kJLuBHe17D@%D@oItEnrN1!}Bs06c]0#GT$zKlbVcfuxbI25I}^Z48KdML-o>Uw[');
define('LOGGED_IN_SALT',   '2J#VAZlEMEa<!!UX>+y?F]fWZJ=1itS&_w/Nh }:CSe]1HRND(AA,cge^LY_y#kh');
define('NONCE_SALT',       'XTKx~#k7cfyJt(U74>O&p*FT:#jq./N.h>vt$mv*Zw6_.3$~jFmxN(<>^OTk QHl');

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
