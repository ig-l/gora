<?php
/*
Template Name: photos
*/
?>

<?php get_header(); ?>

    <div class="photos_bg page_style_bg">
        <div class="photos page_width page_style">
            <?php while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
            <div class="clear"></div>
        </div>

    </div>

<?php get_footer(); ?>