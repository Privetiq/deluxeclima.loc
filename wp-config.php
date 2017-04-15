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
define('DB_NAME', 'deluxecl');

/** Имя пользователя MySQL */
define('DB_USER', 'mywpadmin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '~D;qV0fdHR]]d(6ZtN0Hsn+F>OE/r}}TRZ%Sl=(9XtRbZ?dkr{Oq4+G?7KrptA<p');
define('SECURE_AUTH_KEY',  '5a5a,GJ95AI3Qr]`bi.Gu&eu1M&LCmZ-xgu~Gf-1AN?+WdUI50`!%3T$-v&FMn|g');
define('LOGGED_IN_KEY',    'Qlo!`i!bhgebl+1RU>QL(u`WH{b=hRW2Wv*a*C.X!s^_Q^@8<0-M>!T6KR<(OMwM');
define('NONCE_KEY',        '5QuKmAei$CEm1,_N1H3<(1Wt$PwK?d]1U.5P?,GsI(MlQLO dg>7;R86mbRe&4}&');
define('AUTH_SALT',        'Py(V{E;&2.-O7L{(N{L(z BQLdNyfSQ5$KcfM,BF[@vFeu)q,@&zs3,p?cE3v~0&');
define('SECURE_AUTH_SALT', '9%R)I83>McJv0=o~+ETr,,LDFaQQu22n&|pATmY?{7[] WoJ>Wki<nM7(QBUa6;i');
define('LOGGED_IN_SALT',   ';N,Ee/YM8UhJ16Y7Dhp|?!t7m>pEd1?F*kpBTxkY8seBVYB_:/3r@tfHJEk1*LTm');
define('NONCE_SALT',       'g*l]WLnBFniY _p;cfAx8mE75<5qxw1jm/wzMZ&yzn2|hL)|QlF_}n9>~mvG<1g@');

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
