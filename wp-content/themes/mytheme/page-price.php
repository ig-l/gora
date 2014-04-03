<?php
/*
Template Name: price
*/
?>

<?php get_header(); ?>

    <div class="price_bg page_style_bg">
        <div class="title">
            Цены
            <br>на услуги базы отдыха «Кудыкина Гора»
        </div>
        <div class="price page_width page_style">
            <table>
                <tr>
                    <td>Услуга</td>
                    <td>В выходные и праздничные дни</td>
                    <td>В будние дни</td>
                </tr>
                <tr>
                    <td>Аренда дома на 4-х (+ 2 доп.места) человек </td>
                    <td><?php the_field("house_holidays", 23) ?> руб/сутки</td>
                    <td><?php the_field("house_weekdays", 23) ?> руб/сутки</td>
                </tr>
                <tr>
                    <td>Стоимость одного дополнительного места </td>
                    <td><?php the_field("additional_holidays", 23) ?> руб/сутки</td>
                    <td><?php the_field("additional_weekdays", 23) ?> руб/сутки</td>
                </tr>
            </table>
        </div>
        <div class="price page_width price_bot">
            <div class="left_bot">
                <span class="title">Стоимость игры в пейнбол:</span>
                <div class="clear"></div>
                <div class="left">
                    тариф «Стартовый» - <?php the_field("paintball_start", 23) ?> руб/чел
                    <br>Включено 100 шаров
                    <br>Прокат экипировки, аренда площадки, инструктаж
                    <br>Продолжительность игры 20 - 30 мин.
                    <br>Дополнительные шары - 100 шт.  – <?php the_field("paintball_start_balls", 23) ?> руб.
                </div>
                <div class="right">
                    тариф «Стандарт» - <?php the_field("paintball_standart", 23) ?> руб/чел
                    <br>Включено 600 шаров
                    <br>Прокат экипировки, аренда площадки, инструктаж
                    <br>Продолжительность игры 2 - 2,5 часа
                    <br>Дополнительные шары - 2000 шт.  – <?php the_field("paintball_standart_balls", 23) ?> руб.
                </div>
                <div class="clear"></div>
                Услуги судьи оплачиваются отдельно по договорённости в зависимости от количества игроков.
            </div>
            <div class="right_bot">
                <span class="title">Аренда крытой беседки<br>с камином и караоке:</span>
                <br><br>- <?php the_field("fireplace_and_karaoke", 23) ?> руб/час (для проживающих скидка)
                <div>
                    <span class="title">Встреча/проводы гостей:</span>
                    <br>
                    <br>- ж/д вокзал г. Великие Луки – <?php the_field("guests_luki", 23) ?> руб
                    <br>- ж/д вокзал г. Новосокольники – <?php the_field("guests_novo", 23) ?> руб.
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="price_link page_width">
            <a href="<?php site_url()?>/rules-of-residence/">
                Правила проживания на базе отдыха
                «Кудыкина Гора»
            </a>
            <a href="<?php site_url()?>/rules-of-behavior/">
                Правила поведения на территории
                базы отдыха "Теремок"
            </a>
            <a href="<?php site_url()?>/rules-with-animals/">
                Порядок пребывания с животными
                на базе отдыха«Кудыкина Гора»
            </a>
        </div>
        <div class="clear"></div>
    </div>

<?php get_footer(); ?>