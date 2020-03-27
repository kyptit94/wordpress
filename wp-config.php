<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'shop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'anhky1011' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}+AOxdcoY_MGx[IRW6 wD1]b+ML#cwOmB.L;2^kx[b]thMe{]`ZI=l)pT~bYx%j6' );
define( 'SECURE_AUTH_KEY',  'c@xzvcJlG@f@T2pd QF5CGiG@TCxz*;,j(E$FoV2nNEVgq7 Non#5([JHPZ+Vn7?' );
define( 'LOGGED_IN_KEY',    'M6Sxox4Pxjp^]J_z+,+~51 fiB`-2E7{W>fy:)r3d)6K{+U0Me@;TFRE|f*diZU:' );
define( 'NONCE_KEY',        '_9,w#qk]ID]}K;S+1O _=!O6^juj>Hpg4fw3_?~*OdI<! +b|tR9l#qMhk7Uc,Mg' );
define( 'AUTH_SALT',        '0|`*F<A9ffQU`cLRuL!AU#%0Z@?.`3hlq,,9tq<.w8G}UCJ>b%8.m7QNNgs6VA_(' );
define( 'SECURE_AUTH_SALT', 'Na_]Uo.DBS}u?8STNlP_CtyxkIJVMF$_n}_T8^jJlm<&rAP7rj`z^Mnp/yqs&xC_' );
define( 'LOGGED_IN_SALT',   'IN)_8p6S1Sa#E@Bj-FTpcL:+A6 ^MLgf?8=2Y!hg(7=@*^n)<xGjj431%./BaSWj' );
define( 'NONCE_SALT',       ',um&_NG({oQyOStS=ydP8sE !oYB@#))pcT/s+*NZ)Rj?X+E;WSWim@A-VLJ>)~+' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
