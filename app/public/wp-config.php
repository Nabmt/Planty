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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'oJc,,-?OzGoC$<IK^qg_Qi{W0o3Br>Orpv=E>xq{xc,e^y7,@N[Kj9yV[<TF_)4F' );
define( 'SECURE_AUTH_KEY',   'Q->Odf_DR=cv3g_[}W^TNy2Pe?C@N_@qiyJ*FPTR8mICecD]f{bv&p]tu}EO_s7N' );
define( 'LOGGED_IN_KEY',     '$tJ4?;u;CfVQVvf]EJa8zt/:B5i6Avy:#-[+,GSvNP`PT.+~]NmgI,C,.ZzP-Dwz' );
define( 'NONCE_KEY',         '1i07W{]Hgb]I{:rB=X:)3ieY aW #8ueHwmo qcrqh.,/zH@Ja+q):;yX1ce=`GK' );
define( 'AUTH_SALT',         '_>M2u*R>Tz8jT.{*U?fP%YvOh(Lu|JTy^zBe;]^^@f0|rMdB=sJTE$k%a+RLsO@v' );
define( 'SECURE_AUTH_SALT',  '~iD Q^r&L]uP`Uja_!.99gK7=_ H+q0JyKSiG+d%)dO+mYt[% UN4]-^IF:<3b?{' );
define( 'LOGGED_IN_SALT',    'Tr]Sxni!N1?gB7~gX{ulG9s8enbmp55js+jzP7f~;*^BksC|2f@Y=IA~DumT$BYJ' );
define( 'NONCE_SALT',        '%aw:dA+SNJzZqscm_Be{Y}GfV<n~O{f0{r^Y3R,9FdZf#M|}yI7W3w%iovor!wuL' );
define( 'WP_CACHE_KEY_SALT', 'LlU,F-{-GJ%k:Gq5oz.Y4h_H@xEuc[vrqCP^x7LkbT.VAA9$CLC;*fwIK}X.}+} ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('ALLOW_UNFILTERED_UPLOADS', true);
