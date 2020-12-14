<?php
/**
 * 
 * 
 * @package infocus
 */
?>

<?php

if ( ! function_exists( 'infocus_setup' ) ) :

    function infocus_setup() {
        load_theme_textdomain( 'infocus', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'infocus', 1280, 720, true ); // * width, height, crop
        
        
        
        
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script'
            )
        );

    
    
    // ! Featured content - outdated feature?????????
    add_theme_support(
        'featured-content',
        array(
            'featured_content_filter' => 'infocus_get_featured_posts',
            'max_posts' => 5,
        )
    );
    // ! END Featured content - outdated feature?????????
    
    
    // Custom header, custom logo, custom background
    
    // ! Custom header
    add_theme_support(
        'custom-header',
        apply_filters( 'infocus_custom_header_args',
        array(
            'width' => 2000,
            'height' => 450,
            'default-args' => '',
            )
        )
    );
    // ! Custom background
    add_theme_support(
        'custom-background',
        apply_filters(
            'infocus_custom_background_args',
            array(
                'default-color'=> '#000000',
                'default-image'=> '',
            )
        )
    );
    // ! Custom logo
    add_theme_support( 'custom-logo', array(
        'width' => 100,
        'height' => 100,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array( 'title-tag', 'site-description' ),
    ) );

    
    
    

    
    
    
    
    
    
    
    
    
    
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
endif;
add_action( 'after_setup_theme', 'infocus_setup' );

// Theme variables
$theme_dir = get_template_directory();

// Enqueue vendor styles & scripts
// require $theme_dir . '/inc/vendor/bs-styles.php';
// require $theme_dir . '/inc/vendor/bs-scripts.php';

// Enqueue theme styles & scripts
require $theme_dir . '/inc/enqueue-styles.php';
// require $theme_dir . '/inc/enqueue-scripts.php';


