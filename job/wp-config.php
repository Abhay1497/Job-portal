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
define('DB_NAME', 'job');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2:Fkt4[TN.vOFC;*EzG9OGI2w6~7{SGnu[&.wux,-KSW4VlJ&WLeKRDb>Ss%U9YA');
define('SECURE_AUTH_KEY',  'ZZ0*<FWIe={ToPc/LxqzM%s[ AqBB+7<YHrUB#40F(s=(q=C[5/$To8:E|ipuPU7');
define('LOGGED_IN_KEY',    'e?e|WpG%;;pC?V8|#1%v9[}0i@wxgSDTX>sirSJY/`qa~/=N8hLUSM!H9_,DXRY<');
define('NONCE_KEY',        '9~kxYeFW2UJH`6eI 3y[kL~C`>}#<>4.u9Kb7:&{p.ILy,:|ZYD1%nJUV#`Qfql!');
define('AUTH_SALT',        '=nW]f-~FweS9t*mr_&x)w5 a|TSI:E!n_?tS1*jWx4LD9V6Znb*=H[Er+AXAZfC|');
define('SECURE_AUTH_SALT', 'sucnC|q{D{K(ji.qloR`?`+lS{GGV#%TzAdr4!/f:n=y)Ba;v0l2(kZqq?8}DM:A');
define('LOGGED_IN_SALT',   'S/!g*VLeoO9;s.{&~RJ+@$ ] XjXG3T]t1r`gc~LSb@M^$<a_ 2;M?b()59;ZZU^');
define('NONCE_SALT',       ')vSsC?ct>~nZT{2Wi&TIJ)_QIIT~m;!3KksA~u#q}4xNd:SIZvVP(NsnDciK#6gD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
