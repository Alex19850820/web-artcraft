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
	<!— Yandex.Metrika counter —>
<script type="text/javascript" >
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter47718664 = new Ya.Metrika({
id:47718664,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47718664" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>
<!-- open .header -->
<!-- start header.html-->
<div class="page-preloader">
	<svg viewBox="0 0 1000 200">
		<!-- Symbol-->
		<symbol id="s-text">
			<text text-anchor="middle" x="50%" y="50%" dy=".35em">Craft Group</text>
		</symbol>
		<!-- Duplicate symbols-->
		<use class="text" xlink:href="#s-text"></use>
		<use class="text" xlink:href="#s-text"></use>
		<use class="text" xlink:href="#s-text"></use>
	</svg>
</div>
<header class="header">
	<div class="container">
		<div class="header__mobile-btn"><span></span></div>

		<ul class="header__nav">
			<li><a href="/"><img src="<?php bloginfo('template_url')?>/img/logo_header_red.svg" width="160" height="35" alt=""></a></li>

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