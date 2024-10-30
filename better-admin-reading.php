<?php
/*
Plugin Name: Better Admin Reading
Plugin URI: http://wordpress.org/plugins/better-admin-reading/
Version: 1.1
Description: It will make the Admin easier to read, especially when you have a lot of menu items. Adds padding and subtle lines, etc. For WordPress 3.8 and above.
Author: Wycks
Author URI: https://twitter.com/wycks_s
License: GPL2
*/

/*

    Copyright (C) Wycks

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

/**
 *  Enqueue style in admin
 */
function betterAdminReading() {
    wp_enqueue_style( 'better-admin-reading', plugins_url( 'css', __FILE__ ) . '/better-admin-reading.css' );
    }

add_action( 'admin_enqueue_scripts',  'betterAdminReading' );