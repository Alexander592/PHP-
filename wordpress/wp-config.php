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
define( 'DB_NAME', 'i03_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'i03_wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'F,rIBHDX1GsEPaWY!hjAcH7I^dXQE]nz<?yNl:`IaNlmqS%BBl({E^l{Xp8TFo~Z' );
define( 'SECURE_AUTH_KEY',  'hv;#/9lUQ[pa/M~}dF1zh{mTg6IO^gU2Ndi1D]=p[GiMaL0?CiAMmG3wxs{W9Sop' );
define( 'LOGGED_IN_KEY',    '%jS-RG,g-(UmL@j4edLWSW#-uiom#6Qf2fF-kj}0=n&KX9,nKfKQRFi=w3_<j;7G' );
define( 'NONCE_KEY',        'bPbl_7Z^1Dvwo%>:eADJl)`%Chk |)-#*D;jlc(YH;/JTQ :tAS$c9x34 F~5R5Y' );
define( 'AUTH_SALT',        '39nU__1W{b!Lm]pz4X]0D<OEJ-zXiRJK3h-B[,Q{SM/aVG0$Vb[}V/bs4>|w-{/y' );
define( 'SECURE_AUTH_SALT', 'chEU7S 6JP*F&`kyR8c*3*WL#-fo6]gp&S9-m`+;ngIy2S9a6?46^Kz4tbG2k~<J' );
define( 'LOGGED_IN_SALT',   'u yd4B`y*Z+Pn N-8<RD;hu2>PEH]qCa1J <KFhT+0fRVK3LHazBFB:!AWEE[!JL' );
define( 'NONCE_SALT',       'x}qWtNFnu92|R bcL_S<:/`s ok?>qj4a4`6Uon8O)KS(_/XBiS_K(hyDK5J1V5;' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
