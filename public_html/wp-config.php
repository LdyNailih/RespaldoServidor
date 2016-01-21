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
define('DB_NAME', 'cli22452_bdd');

/** MySQL database username */
define('DB_USER', 'cli22452_lilo');

/** MySQL database password */
define('DB_PASSWORD', 'asdf1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jh$z ?.3Z(5^m!7LEyytnM*,~B+gbuCkaaLH/lHl-nf|1w+M38bfR;mRdSCqc?gM');
define('SECURE_AUTH_KEY',  'NZ>kefHfNg+5+U-LcS}Na`dYB?9Nx,8H}Vi3[rMe^|r/87{/MA4QP.7yP4=6@*X)');
define('LOGGED_IN_KEY',    'H,pp/aHcM5w-g#9e$l-0f.)8VB-$sN6mLMA5 ;c<^O7Ep?7gG/E3yXm[tDWLFi|n');
define('NONCE_KEY',        'iZ5`KqcMv_G^L-L<-{e4x_`F}>YnChBkP~6)^Gr58%OJa}f/E|l>L%Dy(r?`j1X0');
define('AUTH_SALT',        'g/j+L|PIz=@LnSxmyvFe62v*>pbM{&-d&=sVfFS;^y7{|fh=>|AKzbS=&z-L!opW');
define('SECURE_AUTH_SALT', 'fkIb%f|+66Gd,bw5wutVNLu)/QJReLERm[@kiYxG7vNWvX6r7F/%]0S:V*~(UgX9');
define('LOGGED_IN_SALT',   '|j$?KTI@V2 m]UP=S~L0-4i1KB`GTG,aB j(xJ(oL&:7G*9/z.UL%!LvVP0Fm%4w');
define('NONCE_SALT',       '}RXI>1=i);>@z0hv84?6E cP0F CP(dW<r*zOq9xL/Jj -ASO[H.&ZNep.7=S@_k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Dunk1234';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
