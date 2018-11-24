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
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'practika');

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
define('AUTH_KEY',         'zMkFWH!|CgosMq2i}T7Zt?*n&so0M~,Gl i|e?3rk?yGNqVU.W%i/8=HCY(6RMm[');
define('SECURE_AUTH_KEY',  '1/w2<><=phZJWOMJoldg%.OkUzm/q,p1=;Z&~1~r1f]j 0#(S8,AkNV,#5X!rr-1');
define('LOGGED_IN_KEY',    'N WIMa4]$`6a0xtJXL,bkj3g1I=/j~3oN/[/]:tG2YyH4:_~?[S=6VH)Zl$<5f1t');
define('NONCE_KEY',        'h[|Nr7uvxB4WEe@Fv?{0PBN:1.AcM#mm]5J(k3};2s^odQ$jTaT8mfql1y^T-Si/');
define('AUTH_SALT',        '(E0_N#`]^M]ie?Pgt@.bwW@O^ihe{t>&%zXom 18x5Rk#6;wz;A^ V&amdhVv]g#');
define('SECURE_AUTH_SALT', 'VVXQ4Dsm,F{02NFZDMu3bBl7yn9m+2#UA%fkP>+Wyw=TQy}p<(avr*1!.q.erL/k');
define('LOGGED_IN_SALT',   'Q9jHlGb3NXocE<Q[s?Ph,<8B>ZQ)p~%S;k#(Q3U0x2k[1vA}1RnggJiz{Lm{$c}]');
define('NONCE_SALT',       'JO7e1hg_@(bb9.3Dx.v*R}.>{wEYdg*D1Y^=$n33ZEffxX2?$o`5)TqvVd2Y<oQ_');

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
