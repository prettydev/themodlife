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
define( 'DB_NAME', 'db4ryakwbdhu66' );

/** MySQL database username */
define( 'DB_USER', 'uy6a2fz7xntn7' );

/** MySQL database password */
define( 'DB_PASSWORD', '4aq62ndm4rya' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'f|q%]E}J/QoO@p,{.<f6DRR)zxohM+Jz~sGl` JP0/CH{G,+LX;o2XSZ6WS|5mC&' );
define( 'SECURE_AUTH_KEY',   'si}_u$EFA`T3:5)O`/DgrrWcytVM+hARyc.MLG9onXt.tmz*qdfdq2LNxP)@`?c^' );
define( 'LOGGED_IN_KEY',     'J)4bAZLob7N %Bz0!^h#ERi=Pq5=Ph&6LP2F~:#=O=]*7S&DSYF1KRP45H2+qZfM' );
define( 'NONCE_KEY',         'jz+;o0fG1UM,!L0$M[F.B}$Ox}U?g)_x}DrF5jBBKH&44D}b:Bix!zx=}2/=>j:;' );
define( 'AUTH_SALT',         'xa?vy%P`GyR?T!i?<mJ:&M}8>< >]?yC,;(G9ge<,ND5jne_Xv{`LWxiD0^y.L8m' );
define( 'SECURE_AUTH_SALT',  '1)*<xz^UAppH]COEm )N(SY|G-6_:Pvw0u7kh$?j8#__BuYP9u(5hn d#Px[M{Nk' );
define( 'LOGGED_IN_SALT',    'VP8<Q^vxA<9S?^X%qNXp#E M6/1K4}g%-xuNV@L$}jN}g60A!bkI*q`}^MX;fu![' );
define( 'NONCE_SALT',        'x&gJG+<<J;)fhR%4M`YMjPl0B%2D}v$hQr(7}~MrYq%SRRf}-;YKLkVvwht[>H=,' );
define( 'WP_CACHE_KEY_SALT', 'f.sEf>2b#f0N+sC-&drmj(lGXag_2-E*,k_m4X1wZ!2qP|MM]*T9}1 O2+@Nbd!_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yfv_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
