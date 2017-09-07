<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Website/Chiaki_Blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'Chiaki_Blog');

/** MySQL数据库用户名 */
define('DB_USER', 'chiaki');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'chiakileft');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');


define("FS_METHOD","direct");
 
define("FS_CHMOD_DIR",0777);
 
define("FS_CHMOD_FILE",0777);
/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lqu:H0gzaDsoXx5kE#2=K*:.Bg=dZTryksJ~M@)CI5 >{{D.OkV:aS)~Kp^{Z`Zq');
define('SECURE_AUTH_KEY',  'YHJ[;)9>hCX3kl4Fq=,;FOs{nwlFn0FBq~ rZmDOI9l>BVd[C#ZyZE1yfu:A_k39');
define('LOGGED_IN_KEY',    '![Z&PRf@GGa@-[`Mh,=aI;/~.d:BRNM2#7a)o#,qHZ%AOYne.ijl1h$g|V@uH.#S');
define('NONCE_KEY',        'Q!+p{MZq(fXSFaa?6rz,3P;;EmTt|%;#4t51&+,)!fRH61JZ&,7?] FQp(N,_#&_');
define('AUTH_SALT',        '=.bJ}[utD4,s_ir)OilxNq39*D#vTlF0T|.v?+Ndx[t/TLRcbrRK+%RE/(>No`%$');
define('SECURE_AUTH_SALT', 'p>81!~ P8mXwQq(@_a}()-7hjCMcuO/GiMU-.p6+Y@hj?T^IQ3o3RI] %SI1@~AJ');
define('LOGGED_IN_SALT',   'sL7)7}7I)7tS*j1`bVS5UJb/yn>usp V-?G19j<gMePFba^=aMXl(T2TVx$Ne`5c');
define('NONCE_SALT',       '[Vw:c#w?P1PhP`oQ8LGyDd|!R={YxP$z] 9usH0I5ik[R%[* (ww&w}!@)]V>(`l');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'CLB_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
