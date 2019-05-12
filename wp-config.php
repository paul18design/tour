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
define('DB_NAME', 'tour');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dA,l@Oi741b9+<p-u(2fv>wSOIB@xK0*QKG+I(Z2= )qB3Yi=p951uJ|P ?$o[M&');
define('SECURE_AUTH_KEY',  'Yc+j:fVT$S^:QA89B8tu &Qg&J?85q2-#?mo`]c7(3jInM [H>H*D{,%nA_,`Q>M');
define('LOGGED_IN_KEY',    'ufQo$t9lVI3RL*IB^c7aCC.0mmLS_< 36tYj.Eh^%v >s- Wg|=Fs(mi{:R)`=@Q');
define('NONCE_KEY',        '{ws+t/~FhYYr;Zw)Lx~aIU7?C_F&mu9Okza!$SfGu9??%go@i/,_tv}D8omj+,6>');
define('AUTH_SALT',        'b2ZgJO+qAfQygEP>,J;e.l`zdc0yDbPC@W/o*p^ +DQ8sv-|p^r [miBm2$c6|*G');
define('SECURE_AUTH_SALT', '{ICZBOunw9X,#~i6EN-(=WipLcM]fK,V2},K8R^8[YgQ)d5*P6uYAz !~`(u[>N*');
define('LOGGED_IN_SALT',   '@%ms_/yVfGkYm]Fo|dF(#lQ6iL!tP3v!fQEh@%ZQ);Q}1]A_4kcxS)+AZD+,U?r9');
define('NONCE_SALT',       '$}xb<3_5uyuqyZJa.]-Rxy%aS4kt/OyW&a*ePWsR|k*UV;Z*`j&^D?d P_O>s1^k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp9309_';

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
