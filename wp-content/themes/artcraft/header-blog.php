<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

?>
<!-- start html_open.html-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Art-craft</title>
	<?php wp_head();?>
</head>
<body>
<!-- open .header -->
<!-- start header.html-->
<header class="header">
	<div class="container">
		<div class="header__mobile-btn"><span></span></div>

		<ul class="header__nav">
			<li><a href="/"><img src="<?php bloginfo('template_url')?>/img/logo_header_red.svg" width="180" height="35" alt=""></a></li>

			<div class="header__nav-container">
				<li><a href="/">Главная</a></li>
				<li><a href="portfolio">Портфолио</a></li>
				<li><a href="#brief">Контакты</a></li>
				<li class="active-page"><a href="blog">Блог</a></li>
			</div>
		</ul>
	</div>
</header>
<!-- end header.html-->
<!-- end html_open.html-->