<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_cur' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u{k#iNf4ZDO 2WBW5Sw33RDE$IKt]@o}zw:E4^]A%PzySVVE/p0=MTaR0AvKKCyS' );
define( 'SECURE_AUTH_KEY',  'ch>L1;8UyJAG%pHpyG.(fXE*WO6@cKQ&GjF>m(m-GM Qw5+ Vib1Nzt^plSjy._O' );
define( 'LOGGED_IN_KEY',    '?--UAVW[Rb-r$j2o+5oChOC(l. A83M*nThV`~R%`J$jeD/H7O*pd/}cD?u[+86o' );
define( 'NONCE_KEY',        '7[8jz])+*E :0 l@Qu4g85,neV_!TifIZIN2-YKLmJ9_fEPJ[lL_)m/>cS@T$gh5' );
define( 'AUTH_SALT',        '2cEy_%@k[g)CTB}K{a1k}rFm2>wQ7b/G2rm*]TQuP/3o|BRz_O:.-QtVWc@Rx[N2' );
define( 'SECURE_AUTH_SALT', ',uD&!Jq3pkF8q:zBu<a]~k<gQiYcIf_rN e4}znoc h4eE2J{oIH}LGj29q{9iEA' );
define( 'LOGGED_IN_SALT',   '{Hz;-1,,DI80JHaK}*2@hwylPF-Ko8k.krQyJ+KoEJfSw-Ik)bs%cEXZ}xVT2Tdi' );
define( 'NONCE_SALT',       'n+g(-7OKDbehp,0(K!{Cg#miIcU<,ehlp&&!zN+E%Hb~).ZpD! ~9Dm,s]`VE(S~' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
