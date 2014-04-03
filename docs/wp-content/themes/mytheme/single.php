<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div class="news_single_bg page_style_bg">
        <div class="news_single page_width page_style">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <span class="title"><?php the_title() ?></span>
                <div class="text"><?php the_content() ?></div>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer(); ?>