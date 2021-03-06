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
	<script type="text/template" id="qq-template">
		<div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Положить файлы сюда">
			<div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
				<div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
			</div>
			<div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
				<span class="qq-upload-drop-area-text-selector"></span>
			</div>
			<div class="qq-upload-button-selector qq-upload-button">
				<div>Загрузить файл</div>
			</div>
			<span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
			<ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
				<li>
					<span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
					<div class="qq-progress-bar-container-selector qq-progress-bar-container">
						<div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
					</div>
					<span class="qq-upload-spinner-selector qq-upload-spinner"></span>
					<div class="qq-thumbnail-wrapper">
						<img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
					</div>
					<button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
					<button type="button" class="qq-upload-retry-selector qq-upload-retry">
						<span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
						Retry
					</button>

					<div class="qq-file-info">
						<div class="qq-file-name">
							<span class="qq-upload-file-selector qq-upload-file"></span>
							<span class="qq-edit-filename-icon-selector qq-btn qq-edit-filename-icon" aria-label="Edit filename"></span>
						</div>
						<input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
						<span class="qq-upload-size-selector qq-upload-size"></span>
						<button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
							<span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
						</button>
						<button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
							<span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
						</button>
						<button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
							<span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
						</button>
					</div>
				</li>
			</ul>

			<dialog class="qq-alert-dialog-selector">
				<div class="qq-dialog-message-selector"></div>
				<div class="qq-dialog-buttons">
					<button type="button" class="qq-cancel-button-selector">Close</button>
				</div>
			</dialog>

			<dialog class="qq-confirm-dialog-selector">
				<div class="qq-dialog-message-selector"></div>
				<div class="qq-dialog-buttons">
					<button type="button" class="qq-cancel-button-selector">No</button>
					<button type="button" class="qq-ok-button-selector">Yes</button>
				</div>
			</dialog>

			<dialog class="qq-prompt-dialog-selector">
				<div class="qq-dialog-message-selector"></div>
				<input type="text">
				<div class="qq-dialog-buttons">
					<button type="button" class="qq-cancel-button-selector">Отмена</button>
					<button type="button" class="qq-ok-button-selector">Ok</button>
				</div>
			</dialog>
		</div>
	</script>
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
				<li class="active-page"><a href="portfolio">Портфолио</a></li>
				<li><a href="#brief">Контакты</a></li>
				<li><a href="blog">Блог</a></li>
			</div>
		</ul>
	</div>
</header>
<!-- end header.html-->
<!-- end html_open.html-->