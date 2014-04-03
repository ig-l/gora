<?php
/*
Template Name: news
*/
?>

<?php get_header(); ?>
    <div class="news_bg page_style_bg">
        <div class="news page_width page_style">
            <span>Все новости сайта!</span>
            <div class="line_news"></div>
            <?php
            if (have_posts()) : // если имеются записи в блоге.
                query_posts("cat=3"); // указываем ID рубрик, которые необходимо вывести.
                while (have_posts()) : the_post(); // запускаем цикл обхода материалов блога
                        ?>
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        <div class="line_news"></div>
                    <?php
                endwhile; // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>
        </div>
    </div>
<?php get_footer(); ?>