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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u756368510_abyle' );

/** MySQL database username */
define( 'DB_USER', 'u756368510_ywegu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'erySeMeNym' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         'X~+XBco9cXhePzo7<80s/=#RyCg@i0S[5N+R1v_=Th-DCn)ROiwfdH*W@.GFC*R2');
define('SECURE_AUTH_KEY',  '<EBQF?jQ?|v|R]9lHDOH3|P`~cPGVg.[z9z|8g&pS_?pV+4D-o;=z~Sc-Le=H/Lh');
define('LOGGED_IN_KEY',    'd%YK!(4z]<+Niljojx:ER^|w+;.;*Ew8{xfE%X>Uf$y3_(X;B$h5Tek B}n v.e+');
define('NONCE_KEY',        '@+HuGb`.X()%}Vc)O-|Xw_e6NVFf!.8Jk )3KVQNKGHmT-V}f(V[ID.wU=uK23XJ');
define('AUTH_SALT',        '//=t6-LeJ0|6WHAPCWx|a$cxT{%!F{0+fc}!iNB>=&&Z?3,bsW + Ao }Cl?t{Os');
define('SECURE_AUTH_SALT', ')PJA#sTB_0ME~EE-TxgH<h_<lmw_UtMh}`kw~IpiSei%z{:k:Zl~ax;_:VAyr19I');
define('LOGGED_IN_SALT',   'e87z|`3{P t@97-e-YH+;imbjt#ZiyXAi0I0eE?<h]L)iKHtDB}I<l|0!mF86m(y');
define('NONCE_SALT',       '{zDAF6egfoUvZt>lP<t2vHS+,{/mj&zqv*JS56yV7+3fFQQ1w0l.914]u5e$.z|;');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
