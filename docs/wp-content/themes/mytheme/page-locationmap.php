<?php
/*
Template Name: locationmap
*/
?>

<?php get_header(); ?>
<div class="locationmap_bg page_style_bg">
    <div class="locationmap page_width page_style">
        <div class="left">
            <img src="<?php site_url() ?>/wp-content/themes/mytheme/images/tree.png" alt="" style="width: 220px;"/>
<div style="margin-left: 70px; margin-top: 60px;">
<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
</div>
            <div style="text-align: center; margin-top: 100px;">Схема проезда на базу
                <br>отдыха “Кудыкина гора”
                <br>из Москвы
            </div>
            <a style="margin-left: 20px;" href="http://maps.yandex.ru/?origin=jsapi&ll=30.529460,56.340930&z=12&l=map" target="_blank">Посмотреть на Яндекс-карте</a>

<div style="margin-left: 20px; margin-top: 20px;">
<!-- Gismeteo informer START -->
<link rel="stylesheet" type="text/css" href="http://www.gismeteo.ru/static/css/informer2/gs_informerClient.min.css">
<div id="gsInformerID-8Plg3EKVbyq14W" class="gsInformer" style="width:220px;height:243px">
  <div class="gsIContent">
   <div id="cityLink">
     <a href="http://www.gismeteo.ru/city/daily/4368/" target="_blank">Погода в Москве</a>
   </div>
   <div class="gsLinks">
     <table>
       <tr>
         <td>
           <div class="leftCol" style="margin-top: -8px;">
             <a href="http://www.gismeteo.ru" target="_blank">
               <img alt="Gismeteo" title="Gismeteo" src="http://www.gismeteo.ru/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
               <span>Gismeteo</span>
             </a>
           </div>
           <div class="rightCol" style="margin-top: -9px;">
             <a href="http://www.gismeteo.ru/city/weekly/4368/" target="_blank">Прогноз на 2 недели</a>
           </div>
           </td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script src="http://www.gismeteo.ru/ajax/getInformer/?hash=8Plg3EKVbyq14W" type="text/javascript"></script>
<!-- Gismeteo informer END -->
</div>

        </div>
        <div class="right">
            <div style="text-align: center; margin: 0 auto;" class="title">База отдыха «Кудыкина Гора», как добраться?
                <br>Россия, Псковская область, Новосокольнический район,
                <br>Окнинская волость, деревня Молотовка
            </div>
            <p>
                <span class="title">Из Москвы:</span>
                <br>На 493-м километре трассы «Балтия» будет развязка, поворот направо на город Новосокольники,
                <br>за ним АЗС «Сургутнефтегаз». За АЗС поверните направо, на эстакаду.
            </p>
            <p>
                <span class="title">Из Риги или Санкт-Петербурга:</span>
                <br>На 500-м км трассы «Балтия» поверните направо перед кафе «Золотая середина».
                <br>Далее:
                <br>- в деревне Ломыгино – первый поворот налево
                <br>- затем – по главной дороге
                <br>- проезжаете ж/д переезд
                <br>- далее мимо д. Сергие едете прямо и через 1 км д. Молотовка - вы на месте!
            </p>
            <p>
                <span class="title">Предпочитаете поезд?</span>
                <br>Из Москвы – с Рижского вокзала до станции Великие Луки поезд №001Р (ежедневно) и №661А (ежедневно, кроме вторника и субботы).
                <br>Из Санкт-Петербурга – с Витебского вокзала до станции Новосокольники поезд: №049Б, №053А, №061Ь, №083А, №051Б, №035Б, №677А.
                <br>Далее – такси до деревни Молотовка. По предварительной договорённости возможен трансфер от ж/д вокзалов Новосокольников и ВеликихЛук до базы отдыха «Кудыкина Гора».
            </p>
            <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=fck1iTOLaCBhefMEOZK9DADjCneQPYcv&width=700&height=350"></script>
            <br><p>
                Путешествуете на автомобиле?
                <br>GPS-координаты
                <br>Яндекс.Карты: 56º14´19´´с.ш. 30º8´11´´ в.д.
                <br>Навител: N56º14.300´ E30º08.150´
            </p>
        </div>
        <div class="clear"></div>
        <div class="road">
            <span class="title">Краткий фотообзор последних киллометров пути. Приятной дороги!</span>
            <a href="<?php site_url() ?>/wp-content/themes/mytheme/images/road.png" class="gallery_colorbox cboxElement"><img src="<?php site_url() ?>/wp-content/themes/mytheme/images/road.png" alt=""/></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>