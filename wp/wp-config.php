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
define('DB_NAME', 'avasta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'diemas040492');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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

define('AUTH_KEY',         '5bkjm*@s]A}dn`lx<fgJku}qLS: jo,fVRWTQ/5Kb@_,4e*y)8@P(DFfbP$oqXV6');
define('SECURE_AUTH_KEY',  'NMP|l.LuHefV[~`S*G%M;J2Vx {ZlE?.eJ+|iVA%mK4l bC8;=4D{[i1)s--=/G=');
define('LOGGED_IN_KEY',    'Xp||+,gzWDp($Vk|#`:CoIh=+8!WCIdmB&+s/)Z(]TRyy5M;OEYGO$fk9;M:5$$+');
define('NONCE_KEY',        '|mD@~-t-ZEAcP-y,g4)e#<oD^X/]^{BFskCv,@p37,|^pCM`<-R<ok6y{/~cc7h;');
define('AUTH_SALT',        't!e/qVEA!tTh8,+cAxD& /q.Y1exa+i[N7L+1W^L_&!xoD{K`scmQ7dNmDDK%&:T');
define('SECURE_AUTH_SALT', 'i,?(`txkB<90Js[#H0$cQ&U_2.Gz{l=Zp1%lS*ZL6NW4KO/=Bia.kXnA|%yv+MJ(');
define('LOGGED_IN_SALT',   '|G-*E; Cg%Xqr4JHGb3C+JwLYubEA;[+3X+CELI0/t(yI2XnAlA@o71I!J6r|Q(x');
define('NONCE_SALT',       'ZvozkXv~B&W?gS.c|Q?~}.7;!p-9tjV0)k]^@4wi%|.s,Ed-SI<|YmML<C^pV6_/');

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
define( 'WP_MEMORY_LIMIT', '96M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
