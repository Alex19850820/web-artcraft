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
	<?php wp_head(); ?>
</head>
<body>
<!-- open .header -->
<!-- start header.html-->
<header class="header" id="header">
	<div class="container">
		<div class="header__mobile-btn"><span></span></div>
		<ul class="header__nav">
			<li><a class="scroll" href="#"><span></span></a></li>
			<li><a class="scroll" href="/">ГЛАВНАЯ</a></li>
			<li><a class="scroll" href="#results">УСЛУГИ</a></li>
			<li><a class="scroll" href="#portfolio">ПОРТФОЛИО </a></li>
			<li><a class="scroll" href="#brief">КОНТАКТЫ</a></li>
			<li><a class="scroll" href="#blog">БЛОГ</a></li>
		</ul>
	</div>
	<img src="<?php bloginfo('template_url')?>/img/balloon.png" alt="" class="balloon">
	<div class="clouds cloud1"></div>
	<div class="clouds cloud2"></div>
</header>
<!-- end header.html-->
<!-- end html_open.html-->