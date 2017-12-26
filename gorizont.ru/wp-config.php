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
define('DB_NAME', 'gbd');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-8Y3:-FMg+uso((,a!.}RX$Zz>u+vM$=.t@SiG)+6&#|uEgM_:@%8H@)WH3QJU*q');
define('SECURE_AUTH_KEY',  '7c)jE[; wGp)H95K0dcX_-p.X~aE7Dly]b7}$E]?y#6C8mGDPV)PI<Bp43EHX~5@');
define('LOGGED_IN_KEY',    ':9Fa8TP9N< ],Zy.Ag+=.;q^eDK@ge1h})+0)I<L@R(-Ga[fcq^{.#2g3 /fMo<-');
define('NONCE_KEY',        'Qh;%@@RjZ=-U@t-h8F02Vcc|].nXrO+jK$PjD_k$#RE-GJj@qy/Q)[?)zhi>w#7-');
define('AUTH_SALT',        '__|Lbi,f4Y1iue}Zb}=NxZ|y$h&!H$?jU(5w~2&AxF2Q:0F|o{SYi~eQ@/NR/0Qq');
define('SECURE_AUTH_SALT', 'cZdZjBB]mZ+&,jN<A(|=-L[@u@|0@&uRtlQI8GO3]q)1(If@*sPs`*(d+_`}Y[mt');
define('LOGGED_IN_SALT',   '^FP Ua|tz(iV]g|+%+5/d`JG_._9]-/knOJa?f<D[Kj0G5Z0 7q&^3F)VyHpeA=4');
define('NONCE_SALT',       'b||{Ald6X&_ECQ9mZtk65EoUL}Yk`$(]T,~ohjf+py*oEXRtG;S{n +V<{^U; 4,');

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
