<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'omega_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'omega_user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'hsKs9asg' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0?&5G&l|Ed>G0Ov:wUF.$_T$uL{j-*4|q^3C|cQxFUn<!KN&l|B8VuS.Cd?xDtLi' );
define( 'SECURE_AUTH_KEY',  '.;7/kLT4X:C5GbjQz{*(L3;A@r@RC9U*<x:xMZjboRK_MC!p?^B4Pu?#-_KY!S<0' );
define( 'LOGGED_IN_KEY',    '~5%buIW,OrUzMN)>N6|pa>nHHJB$LYd4=Lc){!bIf*r& tF7A2xVcD}7(nw)HfQ5' );
define( 'NONCE_KEY',        '!r)iLd[$  ^{#MROWa 7=re%-5/^_1+/waQ&*v^{mTAo;ycf@qL}HfoYGHf;gw2=' );
define( 'AUTH_SALT',        '_vr:1)t)$-~{Q;#}oP!!_.:IYGUGG?{aZ$,T{+p;hQiSXeX26=|:@w+QBJ49$deX' );
define( 'SECURE_AUTH_SALT', 'B#oU?U-7E!$Fn_D1pzdA7>Vwy4Ce)KZ;7e_8Xn8$g1w0;Y%p$`7yUj(EY]+P1]AE' );
define( 'LOGGED_IN_SALT',   '7_,z?v|_K+T:BrZU0KtNFzV+Eg-%%X^^k9j1EJi* xSI9_rF:(!6u7dSJ~>u{$I^' );
define( 'NONCE_SALT',       'MMJCDV=cB/+4+vI5296Fb1tJLMm0S:FSbuFQMIh>>|#<PHCYlkVj4:0=vUn3|w!k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
