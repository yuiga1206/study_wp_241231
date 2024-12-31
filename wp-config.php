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
define( 'DB_NAME', '24wp_study' );

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
define( 'AUTH_KEY',         'npP`lMCt}4wTxYD:MJ/h:B:yaiQaY4Z,|*].$4oyy.qly_GwFIz/bE~Qs,VLQ1Xe' );
define( 'SECURE_AUTH_KEY',  'RL S<S||BXAL&oVjC}m7+rm_wF+/bbw@1bakKoaR[aDdQp2%~?,2&V]eR6Zy7f}Y' );
define( 'LOGGED_IN_KEY',    '~]nGACb/tU.FH}=(p%v_FmbTE1>&R8&(%Dp@gXk2We?r&N]ZJn?;w,lb4-RZy~yO' );
define( 'NONCE_KEY',        'yU<+{g=?S|LG[a,DgW0r7B!:Y>diF o3]Z!2ru9A^^+?91aJX*4>X*ge6l.2VxE-' );
define( 'AUTH_SALT',        'nNI,ap&KAJ)yWNp&R<uOby;8yjKH@XfXibgLq!o6Nm:}>!D<)0RS#bH33DohhB1o' );
define( 'SECURE_AUTH_SALT', '6zemqWaULX,Tkm>gxGP#epPgdxzL0qE.WA;2<e>9)8R~7hKFP)!bFN51j9SnEQm%' );
define( 'LOGGED_IN_SALT',   'l<l|*:aXK3QeSsumDdq%hO^=l%9W?2Y(o6wOz0,jcs9nFGP!&r%Rvt8/q387|Z2}' );
define( 'NONCE_SALT',       'ApWJ=/uqbUuxo]=5&0X.@g0r jvA&ssSFmvji+,Ifn*^R!,[mM@&zWl7pfcmu[-7' );

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
