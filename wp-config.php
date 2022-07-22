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
define( 'DB_NAME', 'nurudeen_62892' );

/** Database username */
define( 'DB_USER', 'nurudeen_62892' );

/** Database password */
define( 'DB_PASSWORD', '83896ba703ab235f9bde' );

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
define( 'AUTH_KEY',         '?Boz[|:-[ks6x:ajJg?s23#pfUgE!k2BNl&#Wd]n<VO(S$WzuGN.EqG/?t0Xj@_q' );
define( 'SECURE_AUTH_KEY',  'CeQ^@!GJ[5^:Ov?=cLt1J4_r[3`3hH>T;]D#u)xq6v=ZTnX&?<7o}}/iUrm&`9:;' );
define( 'LOGGED_IN_KEY',    '1V?H~{1%QDAc5+[{r>bvcE){9.^aR&BQmmnE:D MX@+422#LIB/|H2x[+#-^}*4P' );
define( 'NONCE_KEY',        '/XeTEx<+bQ7e2So<Rr!N+Vc>H:j2HZY2D+:efzv2(CkVr#Jd|O}~+kt8w-c8KTUF' );
define( 'AUTH_SALT',        'jVd%ZmJ;,Rr^,_b3e!Tb):|2f@MMWk>Le6$N/R9;2sA<X(_t@61_?0s=-mS3.6' );
define( 'SECURE_AUTH_SALT', 'lqoZ[ZCR<pAG6SH~L1FBGV_*?LFx0ANQQ~q(Q?J0/vr831`~VFYw}!|z~)XdVo0W' );
define( 'LOGGED_IN_SALT',   'QR;A3QgUdo#M<onr}wmd(w=$?{j8QX-I[PIA2Zd9B2mR>2(JMv7z~SGckX4xm^$o' );
define( 'NONCE_SALT',       '%BSQXXyL$!e5bxt7e:io3{yUgpJ1sh]F%SocUZnB#wD*a9ikdZd466=_7Z}]ZDsy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '32e_';

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