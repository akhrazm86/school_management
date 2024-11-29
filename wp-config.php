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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         '0A_/K3-BZg>gbr7M]jHLL7tFLNcM%G)p`Oih4Br`GsJ{hWWqqy.r(}n=bH_@>us-' );
define( 'SECURE_AUTH_KEY',  '~Mu*7_RG4 M~xTr!cS]CGCU 5GFc(C|h>R`0MxNat`h9gLF%oFRfS3Z$8iban*-/' );
define( 'LOGGED_IN_KEY',    'J%qh7P89S}!YYw}&daj @;&I^NT#iZj/xZqpJJk7^-Pgm`o@MTM{A//;-CK0JI`i' );
define( 'NONCE_KEY',        'rZd`W$3>U`D55(PzG(Sh~@WmmpR.^l&xL`bCD~f{pBe@CPtN:LYgGk.rRpQ7Bk2+' );
define( 'AUTH_SALT',        'VRFFX=N81Z-K5Xwn]aL$AT|-ROdk`7X1!aa)cV~V;#IkW;#b>|mwA&_u`]d(rCz(' );
define( 'SECURE_AUTH_SALT', '=*5`|A;p4Ve#Fi{17[{<t4GEwEi1MDzVQ/6UK%Sh&,g%<mlf=6BA$S59TWUy1ZZ;' );
define( 'LOGGED_IN_SALT',   '@w^ngH[^P_L>&~z{/%lZacRU|-T*Q{<{YFLCd>+qR6(%sfMOsQ7zj|nN9t;F6T^i' );
define( 'NONCE_SALT',       '>?Us$IYGgFWlBqs5WozsSswbjoi|i#Bw.q5H+81U)sRP20[Q#}0cZ/2Z1tag<|g1' );

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
