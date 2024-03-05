/**
* Plugin Name: Jewel Theme
* Plugin URI: https://www.jeweltheme.com/blog/incompatible-archive-error
* Description: Incompatible Archive Plugin for WordPress Plugin
* Version: 1.0.0
* Author: Pixar Labs
* Author URI: https://pixarlabs.com
* Text Domain: pixarlabs
* Domain Path: /languages/
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

add_filter( 'unzip_file_use_ziparchive', '__return_false' );
