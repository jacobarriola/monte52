<?php

define('DB_NAME', 'monte52');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 * @since 2.6.0
 */
define('AUTH_KEY',         '[72r7@|a8k9rGabIR|VW[TeTs{+EkBgN+_/|./+[3/17XzF+|w0py2:wU*;jfC@q');
define('SECURE_AUTH_KEY',  'yg;x/}5EJ-GbgUN@r[^HDBHiJp!|]oVV;DUA@vq1W1{PoIeTE|c@]@+6qdWr~^bk');
define('LOGGED_IN_KEY',    'qT!CnHGP$oq^J^)c!xm/u4ifs<w29%ld.x2su5hV21MgcZ@2zC]NqBl[U^zLc|Kh');
define('NONCE_KEY',        'tpg7|<R`BPO<Fj,8{a.(5_TF,>w#if$u79>)CQvY/E~^+HqEe}8pVIe$%d|r3;Q~');
define('AUTH_SALT',        '1&;iXF8C4ga|wY:.3,{Kx|f_d{w/`|Xc E*TMo98`-dVq.7BYE!WJs-M+o$(im-r');
define('SECURE_AUTH_SALT', ' TVX[h@I95cT`z;O2|`jp]VDwSV)|f5@hyC%(amOl1GJi]wm1GyOUPnBN{-Yba9C');
define('LOGGED_IN_SALT',   '|z.lX`0%#ZKgHzTNCI-?vSXBvxBRi.M;XG{>=IwsE4 g-W^D:&<v1{Rw7+Zn]krn');
define('NONCE_SALT',       'I}1$LvG!(buHJRtT  zr#2X@R`I; Cf=~1Hk[x#v#UFFU8~Q:pRCx9X$5{igAS:B');

/**
 * WordPress Database Table prefix.
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_SITEURL', 'http://monte52:8888');
define('WP_HOME',    'http://monte52:8888');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
