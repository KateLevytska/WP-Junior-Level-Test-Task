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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test_task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '>RNBd6{.i%SWjO_1xB Rj-}H({74zxL]eXv_dd.xGZhJgL|GdTEZ:>#&74Lw9u@G' );
define( 'SECURE_AUTH_KEY',  '9vB[Pcs Vq;ct,.Wp!%[4lo[nXuopqzZY;Z/3yr@K69`)m,XD,-4k8IBIMFRUD)x' );
define( 'LOGGED_IN_KEY',    '8I50vk.chITL]j4*#K[.L8rCfak54_g/8>pU!`AW7 L)C^07Q2O.>#CtEThj6gG0' );
define( 'NONCE_KEY',        'w]}1?XV]&+Q?kAIRw`JExM]?oEDMViDXVN1$)EPdN>oR-CPc%;/%l:Z$8y Bdnq,' );
define( 'AUTH_SALT',        '[l}sj@BAi%.4nNyh%bP4kKePEcb6mqUGVeviBF_r+}0m%=[7R87|YkvVG3e$_>lh' );
define( 'SECURE_AUTH_SALT', '5u`#:l|TxD=A8Z I>!4M)Y=*:ucg<,7QBla4bqDdbLpUzJ*>%jL}w{%T/37lvcZx' );
define( 'LOGGED_IN_SALT',   '{ZF(<RyX~x #mxk_w#g<<D}K%fw#ep.)|,1owT^XMo:[]</e]<@&cz%j>`lWa{8(' );
define( 'NONCE_SALT',       '[miG/!.}+{3A*>>KO8x/ogU@ b/H0mPj*2 yqMWY6r*CZT:: WM{QsG<ssZFZ+cM' );

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
