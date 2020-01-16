<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'TheUniverseDragonBall' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'g-+nUYE*3k6F7%yZ};~MOti+lFA82??l*x)},Qgj$]JCK*+KC]iHtNXIQ*hT@S6%' );
define( 'SECURE_AUTH_KEY', '(Y}*3hcCw< =o3p`NWw6($:>XLcEnQBtM2.x($c5G?S|_GroM0EIh6?74AsKq}z|' );
define( 'LOGGED_IN_KEY', '4Do|V>JMKDKv?h(#L(!!.YK^N5I]`6ydM0jSg@` $ha.x7`<E(J`6B:/R}ra3n;k' );
define( 'NONCE_KEY', '0qLHJbA%g,_J]oKsx]Fy?|lmQ;o54wo/rLsbc&;4EW2iF]VIH>*i9]1LCxSQEQe5' );
define( 'AUTH_SALT', 'XBlrFbSKV>{p0Q{f@0`nTRc` ![lt4z>2E ht6Ij9Tfm`b2QHF18HK`f.PyU7$7V' );
define( 'SECURE_AUTH_SALT', '!g;hk,5bqIWu5{.Aw<8q}~iI^H9jPSo%0;P7QxFYPi-a<9^|*VcbkE%~MI(bcxKq' );
define( 'LOGGED_IN_SALT', 'vm&G.Tg[jgPUzg!CzVwzY!:Mw~8$7bkg%r@=*`lAPi|rc_W4;;Wxa,`?6s)[|I:Q' );
define( 'NONCE_SALT', 'z|Y<:8KTm7h:{>}n^xyHQCRr@[27m/,-Nbu$@c`77SA8na!eQ~l>fkXeI=GCcjEG' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

