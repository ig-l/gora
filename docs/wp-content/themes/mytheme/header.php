<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<script>
$(window).scroll(function(e){
  parallax();
});
function parallax(){
  var scrolled = $(window).scrollTop();
  $('.bg, .bot_bg_list, .list_left1, .list_right').css('top',-(scrolled*0.2)+'px');
}//@ sourceURL=pen.js
</script>
<script>
$(function() {
    $('#page').append($("<div class='bg'></div>"))
});
</script>


</head>

<body class="page page-id-8 page-template page-template-page-news-php logged-in admin-bar no-customize-support single-author">
	<div id="page" class="hfeed site">
		<div class="header_bg">
            <div class="header page_width">

                <a href="http://kudykina-gora.com" style="background: none;"><img src="/wp-content/themes/mytheme/images/logo.png" alt=""></a>
<div style="margin-top: 180px; margin-left: 17px;">
<!--<a href="http://www.gismeteo.ru/informers/constructor/#5W42J8TdtOKF5T/single" target="_blank">Погода в Великих Луках</a>-->
</div>
                <div class="menu" style="margin-left: 220px;margin-top: -90px;">
                    <a href="/home">Главная</a>
                    <a href="/news">Новости</a>
                    <a href="/photos">Фотогалерея</a>
                    <a href="/price">Цены</a>
                    <a href="/services">Услуги</a>
                    <a href="/locationmap">Контакты</a>
                    <a href="/vicinity">Окрестности</a>
<a href="/reviews">Отзывы</a>
                </div>
            </div>
		</div>
        <div class="clear"></div>

		<div id="main" class="site-main">