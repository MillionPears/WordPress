<?php
/**
 * Plugin Name: Hello World Plugin
 * Description: A simple plugin to print 'Hello World'.
 * Version: 1.0
 * Author: Your Name
 * License: GPL2
 */

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Function to print 'Hello World'.
 */
function printHelloWorld() { // Lỗi: tên hàm không tuân thủ chuẩn snake_case
    echo 'Hello World'; // Lỗi: thiếu khoảng trắng trước và sau dấu ngoặc đơn
}

// Hook the function to 'wp_footer' action.
add_action( 'wp_footer', 'printHelloWorld' ); // Lỗi: tên hàm không tuân thủ chuẩn snake_case
?>
