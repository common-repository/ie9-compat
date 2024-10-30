<?php
/*
Plugin Name: Internet Explorer 9 and 10 Compatibility Inspector
Plugin URI: http://www.ramoonus.nl/wordpress/ie9-compat/
Description: Compat Inspector is designed to help sites migrating to IE9 Standards Mode, not those running in legacy modes.
Version: 1.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_ie9compat() {
    wp_deregister_script( 'ie9compat' );
    wp_enqueue_script( 'ie9compat', 'http://ie.microsoft.com/TestDrive/HTML5/CompatInspector/inspector.js' );
}    
add_action('wp_enqueue_scripts', 'rw_ie9compat');