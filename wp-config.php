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
define('DB_NAME', 'wp-unlimited-studio');

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
define('AUTH_KEY',         'gX2=yBj{,}a2(b6#YKvq 0*^,%*.0ynPGs^Y6&LEqJC!J5ojim<EDieSvW}WhJ8z');
define('SECURE_AUTH_KEY',  '`zK_{-oG%b8Y)C3!|JZ)rqx=[&O]KIk-,/P;IzJ=j!Eu`jz5j:hm8i=v]BR)oe=z');
define('LOGGED_IN_KEY',    'Cc@|S:WS^cfG]{Kkl>6(6,yz/f9}6Pr-+-#IR >?82_H>7x)w37#&^5S3gp3n~LU');
define('NONCE_KEY',        'W~SB4<#;JwJr]R(6:CjRDtb*5#-9yvxkHsWt:lWWM}HjVwbSG2S.Q:6nOE{? <A(');
define('AUTH_SALT',        'Jk5|8>}O@xjU%b_7HS`-}}F=i;-.N`dt|&7{]%@78G4s#G$}g2<Wh[zl~Uc%c?1]');
define('SECURE_AUTH_SALT', 'ZT/hJ7m<KUg@mWNab8:B&/ftNLHT`37aLh>)wNtnlA2*>xK}8vqB%FuOlzQT]/%+');
define('LOGGED_IN_SALT',   'mlwXP&|WBArMwu_7wi3m4>4a-KZ[sI@zIuqL94 9u~;tRMuQO>il|CZ?`YXZUfMY');
define('NONCE_SALT',       'G*Sh8Ay(;@&Gw*|Y=?$:X~`oG4Ys<d8gK7#i3..MISjQWG>sR6WteXQ[ t/Qw%wC');

/**#@-*/

/**Removes p tags from Contact Form 7**/
define('WPCF7_AUTOP', false);

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