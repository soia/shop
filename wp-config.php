<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'soia');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!jP<S|X7OSxF2Lx4OsVi<,4~-;h6pOtA-$`ds_)P1?#ceX}?Mrj!EwP/YUY+)E~6');
define('SECURE_AUTH_KEY',  'X@;y6^D(,5/i-9dtcqvAozl-.}`y-Lp,H]EWV+i;[lY)XzL:7H5XE <@XW}LzJJa');
define('LOGGED_IN_KEY',    'yFCY/>h%#|[U/H.zCf%R%{CDA/tFMe0_5R*Zz ]T^,RvKG&IKF2E3EtHwnSP%=(I');
define('NONCE_KEY',        'LRJ:C6_Q:+o@}QrmPWG.?f?k6OVAIsJS_;N{RxDk 39EXD)0sVloFy3y:H26~Fc.');
define('AUTH_SALT',        'LE6Tw8/ y@[{29|j-Q47{GB*^e 13d/u]uzvqR2!1lyVn8}WYS?.:W-Jtkq= hD>');
define('SECURE_AUTH_SALT', '_L|p3UEE4#>G]=cI)}xD_!53iwPLF?Ub{uqHdMf8GAKx-SGjY/jV~~o)!N5/WgKG');
define('LOGGED_IN_SALT',   '#Z%5.[RSPRUFX XlAJMFl3QY}ty?Zp~:WF[-U|sxb?tbwAKSKOIpX6#!@QV= Z@c');
define('NONCE_SALT',       'u%%8_I_7d`%B9VS*tGTYNt,C71dp&90},|pXrU}gmQSHo$dA_@~<R!M*st6/E({[');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
