<?php
/*
Template Name: reviews
*/
?>

<?php get_header(); ?>
    <div class="services_bg page_style_bg">
        <div class="services page_width page_style">
            <span class="title">Отзывы</span>
            <?php while (have_posts()) : the_post();
                the_content();
            endwhile;
?>
<?php comments_template(); ?> 
            <div class="clear"></div>
            <!--<span class="title">Приятного Вам отдыха!</span>-->
        </div>
    </div>
<?php get_footer(); ?>