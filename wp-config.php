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
define( 'DB_NAME', 'mysite5' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'QW_D.2o1ml6b%v5FQ6C#|.yhByk|8$3E;(6M^Zx=k<z[AWqJTS{rpGiKZ<)7Q5H}' );
define( 'SECURE_AUTH_KEY',  'd=u[{DH<xk-nC5 3gMx}))@.VrB4=Qc0fLA=55uvkJRo[0t;h?i-PW_)+P%c_k}U' );
define( 'LOGGED_IN_KEY',    'wQ[ Hy =f~fP[0}7%k|k=k=0D B6Q_PIm6]2y3s+-x*.,t)BRXcixX2Bv=J %|f7' );
define( 'NONCE_KEY',        'o}?8Ry1$DFF+|HhV07?e0;u!gf]U=a-?3vV^FMG4K:~22[7bVkd:A_5m9%@:6^Bq' );
define( 'AUTH_SALT',        '})SQ#&L2>,&eHnrI/Z%RUITng6e$gsvZf~eVb<!%6!@y^k.Azt[!bn#HnOq3i~Ko' );
define( 'SECURE_AUTH_SALT', '1:YKrr,Qv]CTe%0Kh:._T**m4u>PdAH]Vp).<$ cW$*I }t;rGg :Py/Jx`I-!Sm' );
define( 'LOGGED_IN_SALT',   'YFd:63<G,+&8Va(}h!L#RyM%{wc=/x(d:*qfoFj&7_9>e4^+oQC_C;?nH=8=j]yx' );
define( 'NONCE_SALT',       'Y0GdRp).fq{gF7 p1fN?^*^YQO$Zi:2p9Hg)RjQg3#fq)B`#/i>3vT4B&h+Z;L0Y' );

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
