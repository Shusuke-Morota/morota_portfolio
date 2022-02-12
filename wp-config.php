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
define( 'DB_NAME', 'morota_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u>c2OMCc*UY2c8N-dF..TBqLx(Jj0`K)`Hs(MhPQN?^EnKNgO>hba19IDe5(ds#W' );
define( 'SECURE_AUTH_KEY',  'yw%A,R_5M<oybbnNaSPDI!Cc<94R$9,#s ie{n]u~Zv>?J8%>Mt@SfXtZy+,LdfR' );
define( 'LOGGED_IN_KEY',    'fz^.b#@dl+4TYf/5h42ELfM+]+vJi8PwwEK#~?9_CHYG>(D2`rQ,rb:A@G/=S3eK' );
define( 'NONCE_KEY',        '~{{m1tY s}NoNc`LZBvxKdOzsWFl- }_q=cAM_&.!F9%5Xp~?ZT}fckj0Pm.zh Y' );
define( 'AUTH_SALT',        'V}]Z4DW}`4gl*=yV /|]V{bkB0U:)Of(~kaK1Gy|7(Q`^@b@hGEK1DFv.4U8O+~M' );
define( 'SECURE_AUTH_SALT', ';Db~)weE.S]myw~PXAHCCOC;,jzs2!L;|F>nsFV$xEbFk?mH(540_&,:F_&t-Ta@' );
define( 'LOGGED_IN_SALT',   'C,a.%zH`DqLbG^F0`RQQ98Tl[DV/r?5>tp.K;+|d&7Jkq^c^^<Z#_SxP;yL!M{4U' );
define( 'NONCE_SALT',       'Y5obxNC5Z+]=(KZlJr)D.n7!n_605Nv,~urs=SQjuT.u^6sF?ogJ98?N-} s/n#|' );

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
