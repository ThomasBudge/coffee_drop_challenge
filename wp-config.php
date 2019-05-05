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
define( 'DB_NAME', 'coffee_drop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?3*478H[)pc#HGc,;Y_O Z4lnV~s@-1+8F.^3hun/|Mw5!}<ibTLG5QB2:DAqLDM' );
define( 'SECURE_AUTH_KEY',  '1.td|E%7_;bdjg3+d(iE~]+bAe+NgiRUArXpEVP`raj:i 0oX?@YCF}D[|9~w~/j' );
define( 'LOGGED_IN_KEY',    '+.ORi+I=/V&O~EL/Xb^~-Bnim9!GyMQnab[HUS&JfIAE6*J~q.eM]9WZ$o1@pFTh' );
define( 'NONCE_KEY',        '4G&@y;GcC`Mfj>b4Vk=*<D,_FeR0%h{gtY)!|@^$/]?%s*ek^@a@aW=q*aIrHpCX' );
define( 'AUTH_SALT',        '.t%Jr7z[X1tL4LYt%^**ID!<3vQlZ>?,{&SSc8^[~-;H*Gk(tV_4-sB])<]rTS%b' );
define( 'SECURE_AUTH_SALT', 'p>WqU6ol2^r/Ulm9m85jcOq9UAsqPuUbN5e2C_H8s<5D=?pVPi94dMw?;0~FGYj%' );
define( 'LOGGED_IN_SALT',   '](N3AdGy*;Lc>>fh4(gR2/SP+PBDl&@tq)!Tq[qqF<U<c$B y@.;qxTAQG5*K0Jx' );
define( 'NONCE_SALT',       '0{>!*w-[Y&9{GR+o9YcM=C>|`A=nng;JT^_(uA63?v!&A,l$c<p*n`7)O(MV&2)s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
