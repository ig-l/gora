<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

    <div class="home_bg">
        <div class="home">
            <div class="top_bg">
                <div class="top_border page_width">
                    <div class="top">
                    <h1>База отдыха «Кудыкина Гора»</h1>
                       <p>Вырваться из суеты мегаполиса, полной грудью вдохнуть чистого воздуха – вот о чём мечтают многие городские жители. Оптимальным вариантом для семьи или компании друзей может стать аренда домика для отдыха. И тут возникает проблема выбора: куда отправиться на уик-энд? Да на «Кудыкину Гору»!</p>
<p>
  В Псковской области, на берегу живописного лесного озера, расположена база отдыха «Кудыкина Гора». Мы предлагаем аренду домика для отдыха и рыбалки, оборудованного всем необходимым – удобной мебелью, телевизором, небольшой кухней и санузлом. Мы позаботились и о любителях шашлыка – возле каждого домика есть персональный мангал, а для больших компаний на территории имеется просторная застеклённая беседка с камином и караоке.</p>
<p>
Здешние края богаты грибами. Желающие размяться и нагулять аппетит весело проведут время на площадке для пейнтбола.</p>
<p>
У гостей базы отдыха «Кудыкина Гора» есть уникальная возможность приобрести экологически  чистые продукты – баранину, мясо вислобрюхой вьетнамской свиньи, а также мясо и яйцо фазана.</p>
<p>
Москвичи и петербуржцы скажут, что есть различные базы отдыха недалеко от Москвы и Северной Пальмиры. Но обратите внимание: чем дальше от крупного города, тем чище воздух, тем белее снег. Уникальная природа и богатейшее историко-культурное наследие несомненно делают отдых в Псковской области привлекательным для тех, кто не боится расстояний,  хочет увидеть новые земли и расширить свой кругозор.</p>
<p>
Конечно, невозможно  за один день посетить все достопримечательности Псковской области. Гораздо удобнее снять домик, например, на базе отдыха «Кудыкина Гора», неподалёку от города Великие Луки. Поужинав с аппетитом и хорошенько выспавшись после дальней дороги, можно не спеша отправиться в Пушкинские Горы или на рыбалку на одно из многочисленных озёр или рек.</p>
<p>
Рыбалка в Псковской области порадует самого искушённого рыболова. Легендарное Чудское озеро, реки Ловать и Великая – для рыбалки в Псковской области есть все возможности. База отдыха «Кудыкина Гора» выгодно отличается тем, что закинуть удочки можно буквально не отходя от дома! Если же вам захочется простора и приключений, то в нескольких километрах от базы отдыха находится большое и глубокое озеро Асцо. Это одно из лучших мест для рыбалки в Псковской области. Оно примечательно таинственным зелёным островом, овеянным тайнами и древними легендами.</p>

<div style="font-size:16px;text-align:center;">База отдыха «Кудыкина Гора» - это то место, куда хочется вернуться!</div>
<div class="list_right"></div>

                </div>

            </div>
            <div class="bot_bg">
<div class="list_left1"></div>

                <div class="page_width">
                    <div class="bot_left">
                        <span>Новости сайта!</span>
                        <div class="line_home"></div>
                        <?php
                        if (have_posts()) : // если имеются записи в блоге.
                        query_posts("cat=3"); // указываем ID рубрик, которые необходимо вывести.
                        while (have_posts()) : the_post(); // запускаем цикл обхода материалов блога
                            if (get_field('news_home', get_the_id()) == 1)
                            {
                            ?>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a><br>
                            <div class="line_home"></div>
                        <?php
                            }
                        endwhile; // завершаем цикл.
                        endif;
                        /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                        wp_reset_query();
                        ?>
                    </div>

                    <div class="bot_right">
                        <span class="title">Фотографии Базы отдыха</span>
                        <div>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/Вид_с_озера.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/Вид_с_озера-300x199.jpg" alt="" class='photo'/></a>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_0159.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_0159-300x199.jpg" alt="" class="photo"/></a>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_00921.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_00921-300x199.jpg" alt="" class="photo"/></a>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_0083.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_0083-300x199.jpg" alt="" class="photo"/></a>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_00871.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/DSC_00871-300x199.jpg" alt="" class="photo"/></a>
                            <a href="http://kudykina-gora.com/wp-content/uploads/2014/03/Озеро3.jpg" class="gallery_colorbox cboxElement">
                            <img src="http://kudykina-gora.com/wp-content/uploads/2014/03/Озеро3-300x199.jpg" alt="" class="photo"/></a>
                            <div class="clear"></div>
                        </div> 
                        <a href="/photos">Еще фото...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>