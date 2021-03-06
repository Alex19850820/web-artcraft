<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

?>
<!-- start html_close.html-->
<!-- start brief.html-->
<?php $phone = fw_get_db_customizer_option( 'phone' ); ?>
<?php $email = fw_get_db_customizer_option( 'email' ); ?>
<?php $vk = fw_get_db_customizer_option( 'vk' ); ?>
<?php $facebook = fw_get_db_customizer_option( 'facebook' ); ?>
<?php $telegram = fw_get_db_customizer_option( 'telegram' ); ?>
<?php $whatsapp = fw_get_db_customizer_option( 'whatsapp' ); ?>
<?php $viber = fw_get_db_customizer_option( 'viber' ); ?>
<?php $mesendger = ['telegram' => $telegram, 'whatsapp' => $whatsapp, 'viber' => $viber ]?>

<section class="brief" id="brief">

	<div class="container">
		<div class="brief__head">
			<p class="paragraph">наш бриф </p>
			<div class="wrap">
				<div class="tittle">
					<span>заполните</span>
					<h2>наш бриф</h2>
					<p>
						Хорошо заполненный бриф - первый и очень важный этап успешно и вовремя завершённого проекта.
					</p>
				</div>
			</div>
		</div>

		<div class="brief__content">

			<form method="post" id="send_form" class="brief__form" onsubmit="return false;"
					enctype="multipart/form-data">
				<input type="hidden" name="filePath" id="filePath">
				<div class="brief__form-head">
					<div>
						<label for="name">Ваше имя, фамилия *</label>
						<input type="text" name="name" required placeholder="Ваше имя" id="name">
					</div>
					<div>
						<label for="phone">Ваш номер телефона *</label>
						<input type="text" name="phone" required placeholder="Телефон" id="phone">
					</div>

					<div>
						<label for="mail">Ваш e-mail *</label>
						<input name="email" id="mail" type="email" placeholder="Ваш e-mail" required>
					</div>

					<div>
						<label for="skype">Ваш skype</label>
						<input name="skype" id="skype" type="text" placeholder="Ваш skype">
					</div>
				</div>

				<div class="brief__form-message" lang="ru">
					<label for="message">Сообщение</label>
					<textarea id="text" placeholder="Сообщение"></textarea>
					<!--<label for="add-file">-->
					<!--<img src="-->
					<?php //bloginfo('template_url')?>
					<!--/img/clip.png" width="13" height="13" alt=""> Прикрепить файл</label>-->
					<!--<input type="file" id="add-file" name='file'>-->
					<!--					<input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} файла(ов) выбрано" multiple />-->
					<!--<label for="file-2"><img src="-->
					<?php //bloginfo('template_url')?><!--/img/clip.png" width="13" height="13" alt=""> <span>Прикрепить файл&hellip;</span></label>-->
					<!--<input  type='file' id="file" name='file'>-->
					<div id="fine-uploader" class="uploader"></div>
				</div>

				<div class="brief__form-services">
					<h3>Какие услуги Вас интересуют?</h3>

					<input id="ckeckbox_mob" type="checkbox" name="ckeckbox_mob"
							value="Дизайн сайта или дизайн landing-page">
					<label for="ckeckbox_mob"><span></span>Дизайн сайта или дизайн landing-page</label>

					<input id="ckeckbox_supp" type="checkbox" name="ckeckbox_supp"
							value="Дизайн печатной продукции (все виды)">
					<label for="ckeckbox_supp"><span></span> Дизайн печатной продукции (все виды)</label>

					<input id="ckeckbox_site" type="checkbox" name="ckeckbox_site" value="Посадка сайта на WordPress">
					<label for="ckeckbox_site"><span></span>Посадка сайта на WordPress</label>

					<input id="ckeckbox_seo" type="checkbox" name="ckeckbox_seo"
							value="Разработка интернет-магазина на платформе YI2">
					<label for="ckeckbox_seo"><span></span>Разработка интернет-магазина на платформе YI2</label>
				</div>
				<div class="brief__form-desc">
					<p><span>*</span> обязательные поля</p>
					<input id="submit" class="send" type="submit" value="Отправить бриф">
				</div>
			</form>
			<div class="brief__contacts">
				<h3>Наши контакты</h3>
				<div class="brief__tel">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/phone-ico.png" alt="">
					<strong><?=$phone?></strong>
				</div>
				<div class="brief__social">
					<strong>Соц. сети</strong>
					<?php if ( $vk ): ?>
						<a href="<?=$vk?>"><img src="<?php bloginfo( 'template_url' ) ?>/img/vk-ico.png" alt=""  target="_blank"></a>
					<?php endif; ?>
					<?php if ( $facebook ): ?>
						<a href="<?=$facebook?>"><img src="<?php bloginfo( 'template_url' ) ?>/img/fb-ico.png"
									alt=""  target="_blank"></a>
					<?php endif; ?>
				</div>
				<div class="brief__messengers">
					<strong>Мессенджеры</strong>
					<?php if($mesendger):?>
						<a href="https://telegram.me/<?=$mesendger['telegram']?>"  target="_blank">
							<img src="<?php bloginfo( 'template_url' ) ?>/img/telegram-ico.png" alt="">
						</a>
						<a href="https://api.whatsapp.com/send?phone=<?=$mesendger['whatsapp']?>"  target="_blank">
							<img src="<?php bloginfo( 'template_url' ) ?>/img/003-whatsapp.png" alt="">
						</a>
						<a href="viber://chat?number=<?=$mesendger['viber']?>"  target="_blank">
							<img src="<?php bloginfo( 'template_url' ) ?>/img/wu-ico.png" alt="">
						</a>
					<?php endif;?>
				</div>
				<div class="brief__email">
					<strong>E-mail</strong>
					<a href="mailto:<?=$email?>"><?=$email?></a>
				</div>
			</div>
		</div>

	</div>

	<div class="animate-circle"></div>

	<img src="<?php bloginfo( 'template_url' ) ?>/img/balloon.png" alt="" class="balloon">

	<p class="fill-brief"><span>покорить вершины легко!</span>Осталось только заполнить бриф</p>

</section>
<!-- end brief.html-->
<?php wp_footer(); ?>
<a href="#" class="scrollup"></a>
<script>
	// $('.grid').imagesLoaded( function() {
	// 	$('.grid').masonry({
	// 		itemSelector: '.grid-item',
	// 		// columnWidth: '.grid-sizer',
	// 		percentPosition: true
	// 	});
	// });

	// Some options to pass to the uploader are discussed on the next page

	var uploader = new qq.FineUploader({
		failedUploadTextDisplay: {
			mode: 'default',
			responseProperty: 'error',
		},
		element: document.getElementById("fine-uploader"),
		validation: {
			allowedExtensions: ['jpeg', 'png', 'jpg'],
			itemLimit: 5,
			sizeLimit: 31457280
		},
		template: 'qq-template',
		request: {
			endpoint: '<?php bloginfo( 'template_url' )?>/includes/fine-uploader/endpoint.php',
			forceMultipart: false,
		},
		deleteFile: {
			enabled: true,
			endpoint: '<?php bloginfo( 'template_url' )?>/includes/fine-uploader/endpoint.php'
		},
		retry: {
			enableAuto: true
		},
		dragAndDrop: {
			disableDefaultDropzone: true //отключаем дроп-зону
		},
		messages: { //русифицируем некоторые сообщения и кнопки
			typeError: "{file}: неверный тип файла. Принимаются только файлы форматов: {extensions}.",
			sizeError: "{file}: файл слишком большой. Максимальный размер: {sizeLimit}.",
			tooManyItemsError: "Вы пытаетесь закачать {netItems}-й файл. Максимальное количество: {itemLimit}."
		},
		text: {
			uploadButton: 'Прикрепить файлы',
			failUpload: 'Не закачан!'
		},
		callbacks: {
			onComplete: function (event, id, fileName, responseJSON) {
				// console.log($("#filePath").val(fileName.path));
					$('#send_form').append('<input class="fileUp" name="file[]" id="file_'+ fileName.uuid +'" type="hidden" value="' + fileName.path + '">');
			},
			onDeleteComplete: function(id, xhr, isError) {
				var id = JSON.parse(xhr.response).uuid;
				$('#file_' + id).remove();
			}
		}
	})
</script>
<!-- end html_close.html-->