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
define( 'DB_NAME', 'site_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '1uNo!lE=}0r^g!E`*dm}&A9{=9owsX(xZ1^3>T#?8A^9_quc.ccss=o#,$aa<~A%' );
define( 'SECURE_AUTH_KEY',  'l0SBL:M7 %^n i9o~~oQpxSFi~pDXOni_twk?yw<LqtFjGy]]*wEbScQ=1x*Y2+b' );
define( 'LOGGED_IN_KEY',    'qq6-|EO.aVBGK{6SQ*TnlH}Te6Ww3T5I|@j@n0EHUffV9~Uo2yXLs$m5n{HxdqQN' );
define( 'NONCE_KEY',        '0!T_o+@_[v_aD$ZzncG(=g@4bwDln@*k^Go6BH.]$3*|<[1!o,(a|J88t_+iQ,JR' );
define( 'AUTH_SALT',        'b^ l=BYx1S!?u7-nOksb#0W;K&n+R~:n={d6eH2}Lec=J*kirA<H@YI7B(m]p#/~' );
define( 'SECURE_AUTH_SALT', 'T:~U)7<qW-4=ut=a(f8JWH~]VN0)R$:4J=q<!Msh+<VupNg}bk|z o.cF(fGj@ui' );
define( 'LOGGED_IN_SALT',   'D-a= {ng4&mXyk0{?-6Zhb1%Lo?S{wbR2LK&z>:7!QhlD$)5F1pv|uR<NLjx?$K/' );
define( 'NONCE_SALT',       'j=YUfg%WN_zNFOWIbB88DCZc<Ou*s,,tqs{)T(t.q7$jCBq&9VI91>.-iP]%ON9:' );

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
