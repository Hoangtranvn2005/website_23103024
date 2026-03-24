<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website_23103024' );

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
define( 'AUTH_KEY',         'm-PUi.}]vPP6-){ngQA1U-h:o3z|EozG!c-t&cz)l_[rNm<;iJ1>0QX{uU|2Q>HI' );
define( 'SECURE_AUTH_KEY',  '~e&^^J:qU( 17LPvzlC4tR}tXM$Q:zNFZSe#&haHDQqlw|8,lsOnobZXuPE}L2p<' );
define( 'LOGGED_IN_KEY',    'cxwh2d)61<qYATnExq:`%F412Xwvoy6tg(/d7C>]3D/wS}ka]4=-$t+thMdJMn{]' );
define( 'NONCE_KEY',        'M* |*]~t3^B#i1(tC7BsIjP/-x*4nulTB&9-g1IWp/k1!kz|M?=ls<n|Yi@kt!D/' );
define( 'AUTH_SALT',        '!##UD{?k#7]s(/pE; OG%U=te9<OH$_z0u=V=Sx-y.C?{?RT4@GJ]Ltb0C(qC3Lt' );
define( 'SECURE_AUTH_SALT', 'zXq7h^o)V4}j%77NUbNQbs.9>_D|M*N>yrOK3@0yMLC#F)a[D%SfT]gjM:NnTQ<+' );
define( 'LOGGED_IN_SALT',   'vh&2%D}iD:1 o$@O;oevB`=Mk7-5hRGrC#p4chd/fqoso[REgXjiuGK>PG)#g@o_' );
define( 'NONCE_SALT',       ';4=xpJ]f|r.W$#s56wTwjja+nSsCZtE@jl@ljgr-6Z|.k&q%C[)Jmzs fYa1rzs3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
