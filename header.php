<?php
/**
 * Header template. All content until #main opening tag
 * 
 * @package infocus
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'infocus' ); ?>
    </a>

    <?php get_template_part( '/template-parts/header/site-header' ); ?>
<h1>HEADER</h1>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">