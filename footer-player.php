<?php
/*
Plugin Name: footer-player
Plugin URI:
Description: 記事ページ内にaudioタグが設置されている時、floating形式のfooterに再生ボタンを表示します
Version: 1.0.0
Author:Satoshi Moriya
Author URI: http://kaisenosekai.com
License: GPL2

Copyright 2016 Satoshi Moriya (email : shigeshibu44@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// function inc_header() {
//     echo include('include/header.php');
// }
// add_action('wp_head', 'inc_header');

function inc_footer() {
    echo include('include/footer.php');
}
add_action('wp_footer', 'inc_footer');


?>
