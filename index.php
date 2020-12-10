<?php
/**
 * 
 * 
 * @package infocus
 */
?>

<?php get_header(); ?>

<h1>INDEX</h1>

    <?php // WordPress Loop ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </article>
        <?php endwhile ?>
    <?php else : ?>
        <article class="post error">
            <h1 class="404">No posts found</h1>
        </article>
    <?php endif; ?>

<?php get_footer(); ?>