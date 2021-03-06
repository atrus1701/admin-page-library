<?php
/*
Plugin Name: Admin Page Library (APL)
Plugin URI: https://github.com/clas-web/admin-page-library
Description: The Admin Page Libary (APL) is a collection of classes and functions that are designed to make the process of creating admin menus, pages, and tabs more quickly and with less duplicate code.
Version: 1.1.3
Author: Crystal Barton, Aaron Forsyth
Author URI: https://pages.uncc.edu/oat
*/


if( !defined('APL') ):

/**
 * The full title of the Admin Page Library MU plugin.
 * @var  string
 */
define( 'APL', 'Admin Page Library' );

/**
 * The version of the plugin.
 * @var  string
 */
define( 'APL_VERSION', '1.0.2' );

/**
 * The path to the plugin folder.
 * @var  string
 */
define( 'APL_PATH', __DIR__.'/apl' );

endif;


require_once( APL_PATH.'/functions.php' );
require_once( APL_PATH.'/admin-menu.php' );
require_once( APL_PATH.'/admin-page.php' );
require_once( APL_PATH.'/tab-admin-page.php' );
require_once( APL_PATH.'/tab-link.php' );
require_once( APL_PATH.'/handler.php' );
require_once( APL_PATH.'/widget-shortcode-control.php' );


