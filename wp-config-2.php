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
define('DB_NAME', 'yush25um_ms');

/** Имя пользователя MySQL */
define('DB_USER', 'yush25um_ms');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Psss-3456*kl');

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
define('AUTH_KEY',         'zaF>FS=:|>n>=$g.aV]l?:U+)0yu;}h~Ecg+ba}|O~-oL0=DR([<EE,5Hq1(6kA~');
define('SECURE_AUTH_KEY',  'pW[kYe:Z*|3S7FF,:psspwXMYw -7 Q,K$7jtNMNblx*-2YhlEnvP 75`s%Tu=/V');
define('LOGGED_IN_KEY',    '-S~k(0iI7vb7jUwHPRLUHano{!#v~qHXwaVPLWp~&J^_-<w;>lR,C=1dm_nQmxKx');
define('NONCE_KEY',        '?#s9p{!kKd[)uYZ36(5;vgj$B~/NDst)d,mCY|tI,`W=`[1_d_y*<RQ*B5o}yyF<');
define('AUTH_SALT',        '=zU}`|+o>VP{HYGw8fW?cb<4%y,/aacv?(0kq{J&0pnVig6srn9d7!<$z/Z.?exy');
define('SECURE_AUTH_SALT', 'Qp99~QSTqyQD!PjKHw3]{)A;AO{rq?;9DI?~Cs*U@*P~D/9QI&~69+y:1#?F?Jqp');
define('LOGGED_IN_SALT',   '8VQu)pH?DyH;x71X[zSk)5>Ud;P,LAGG&UQ<DB}e#19.:tGVe$[%lSDTdtcJEhk<');
define('NONCE_SALT',       'dOiZ;^!au]/,q}|*1joTSx/05!j^:~q;?hpg 1x.8$7b]50Ng?LtXZ/nxihCsI.e');

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
