<?php

/*
Plugin Name: Simple post order
Plugin URI: https://github.com/my-language-skills/simple-post-order
Description: This plugin change the default post order in post-front.
Authors: colomet
Version: 1.0
Author URI: https://github.com/my-language-skills/
Based on: https://wpdevshed.com/guide-re-ordering-blog-posts/
Text Domain: simple-post-order
Domain Path: /languages
*/

// If this file is called directly, abort.
defined ("ABSPATH") or die ("No script assholes!");


//Post organiced alphabetically
function change_posts_order( $query ) {
if ( $query-is_home() && $query-is_main_query() ) {
$query-set( 'orderby', 'title' );
$query-set( 'order', 'ASC' );
}
}
add_action( 'pre_get_posts', ' change_posts_order ' );
