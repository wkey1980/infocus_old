<?php
/**
 * 
 * 
 * @package infocus
 */
?>
<?php

function infocus_setup_styles() {

    // Variables
    $infocus_setup_styles_ver = filemtime( get_template_directory() . '/dist/theme.css');

    wp_enqueue_style( 'theme.css', get_template_directory_uri() . '/dist/theme.css', array(), $infocus_setup_styles_ver, 'all' );
}
add_action('wp_enqueue_scripts', 'infocus_setup_styles' );
?>