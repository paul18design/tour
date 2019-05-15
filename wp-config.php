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

if ( file_exists( dirname(__FILE__) . '/wp-config-local.php' ) ) {
    require_once ( dirname( __FILE__ ) . '/wp-config-local.php');
} else {
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
    define('AUTH_KEY',         'ReFu|QIy38L9>V/4jygrK;%KcgQnHk%w[-dRu++lt,l06UO$KKdY;WL|zb^b+4aH');
    define('SECURE_AUTH_KEY',  '8M(|aPG2<kX-7@(^=0,dLGlo)Nv3hd&[fV^zKWbF;sZwv@3H|}uoq3$U3W!pH<6]');
    define('LOGGED_IN_KEY',    'J{h%p 2Q=S+KI1fYX{v(VU@.OXoGitxUc/S;5akwTSe<_w7FcF9~^^K|^RyL`_L>');
    define('NONCE_KEY',        '~!GW}dM;;e70KG/ rQH:iB>m~-QxfrtUS`aq:]IvWgdd)$yG*|d6{H{y$?2|^ak%');
    define('AUTH_SALT',        'yA:41j6yfpTs]~_!fMS!2-6A,QrhX%lCF6d+ph6R$~<kh7Q_#%4|<Xfx<4[)/Bur');
    define('SECURE_AUTH_SALT', '-xs )>Nc@aUg40(IHSNOg7|8I_+-je:(>I?U(rpuf-oY+g&Jl[smhO #6Wq6|dY@');
    define('LOGGED_IN_SALT',   'Nvw)mQXis2+uiLq`,{0JewCnXZ^G[l=gn:d.Nq7C0M|{|pa8|.?g*J~?~Hl]Sr#A');
    define('NONCE_SALT',       '3o7h#|D8a+98y6VZvH+j)R`OP/a+>|uyJm~&*{Q^a_`o_jWQ{hHe<#px+ N]]0ds');

    define('WP_DEBUG', true);

    /**#@-*/

    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix  = 'wp9309_';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
