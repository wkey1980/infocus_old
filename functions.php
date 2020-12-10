<?php
/**
 * 
 * 
 * @package infocus
 */
?>

<?php

function infocus_setup() {
    load_theme_textdomain( 'infocus', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );
    
}
adds_action( 'after_setup_theme', 'infocus_setup' );

// Theme varables
$theme_dir = get_template_directory();

// Enqueue vendor styles & scripts
requite $theme_dir . '/inc/vendor/bs-styles.php';
requite $theme_dir . '/inc/vendor/bs-scripts.php';


// Enqueue theme styles & scripts
require $theme_dir . '/inc/enqueue-styles.php';
require $theme_dir . '/inc/enqueue-scripts.php';


