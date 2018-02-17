<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<!-- start brief.html-->
<section class="brief" id="brief">

	<div class="container">
		<div class="brief__head">
			<p class="paragraph"><?=$atts['paragraph']?></p>
			<div class="wrap">
				<div class="tittle">
					<span class="block_span_title"><?=$atts['title']?></span>
					<h2 class="block_title"><?=$atts['h2']?></h2>
					<p>
						Хорошо заполненный бриф - первый и очень важный этап успешно и вовремя завершённого проекта.
					</p>
				</div>
			</div>
		</div>

		<div class="brief__content">

			<form action="" method="post" id="send_form" class="brief__form" onsubmit="return false;" enctype="multipart/form-data" class="brief__form">
					<div class="brief__form-head">
						<div>
							<label for="name">Ваше имя, фамилия *</label>
							<input type="text" name="name" required placeholder="Ваше имя" id="name">
							<span class="error-box">*</span>
						</div>
						<div>
							<label for="phone">Ваш номер телефона *</label>
							<input type="text" name="phone" required placeholder="Телефон" id="phone">
						</div>
					</div>

					<div class="brief__form-message">
						<label for="message">Сообщение</label>
						<textarea id="text" placeholder="Сообщение"></textarea>

						<label for="add-file">
<!--							<img src="--><?php //bloginfo('template_url')?><!--/img/clip.png" width="13" height="13" alt=""> Прикрепить файл</label>-->
<!--						<input type="file" id="add-file" name='file'>-->
						<input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} файла(ов) выбрано" multiple />
                    <label for="file-2"><img src="<?php bloginfo('template_url')?>/img/clip.png" width="13" height="13" alt=""> <span>Прикрепить файл&hellip;</span></label>
						<!--<input  type='file' id="file" name='file'>-->
					</div>
					<div class="brief__form-services">
						<h3>Какие услуги Вас интересуют?</h3>
						<input id="ckeckbox_mob" type="checkbox" name="ckeckbox_mob" value="Дизайн сайта или дизайн landing-page">
						<label for="ckeckbox_mob"><span></span>Дизайн сайта или дизайн landing-page</label>

						<input id="ckeckbox_supp" type="checkbox" name="ckeckbox_supp" value="Дизайн печатной продукции (все виды)">
						<label for="ckeckbox_supp"><span></span> Дизайн печатной продукции (все виды)</label>

						<input id="ckeckbox_site" type="checkbox" name="ckeckbox_site" value="Посадка сайта на WordPress">
						<label for="ckeckbox_site"><span></span>Посадка сайта на WordPress</label>

						<input id="ckeckbox_seo" type="checkbox" name="ckeckbox_seo" value="Разработка интернет-магазина на платформе YI2">
						<label for="ckeckbox_seo"><span></span>Разработка интернет-магазина на платформе YI2</label>
					</div>
					<div class="brief__form-desc">
						<p><span>*</span> обязательные поля</p>
						<input id="submit"  class="send" type="submit" value="Отправить бриф">
					</div>
			</form>
			<div class="brief__contacts">
				<h3>Наши контакты</h3>
				<div class="brief__tel">
					<img src="img/phone-ico.png" alt="">
					<strong><?=$atts['phone']?></strong>
				</div>
				<div class="brief__social">
					<strong>Соц. сети</strong>
					<a href="https://vk.com"><img src="<?php bloginfo('template_url')?>/img/vk-ico.png" alt=""></a>
					<a href="https://facebook.com"><img src="<?php bloginfo('template_url')?>/img/fb-ico.png" alt=""></a>
				</div>
				<div class="brief__messengers">
					<strong>Мессенджеры</strong>
					<img src="<?php bloginfo('template_url')?>/img/telegram-ico.png" alt="">
					<img src="<?php bloginfo('template_url')?>/img/003-whatsapp.png" alt="">
					<img src="<?php bloginfo('template_url')?>/img/wu-ico.png" alt="">
				</div>
				<div class="brief__email">
					<strong>E-mail</strong>
					<a href="mailto:info@artcraft.ru"><?=$atts['email']?></a>
				</div>
			</div>
		</div>
			<?php foreach ($atts['text'] as $text):?>
				<?php if ($text['title'] == '1'):?>
					<div class="brief__text">
						<p><?=$text['desc']?></p>
						<div class="red-dot"><span></span></div>
					</div>
				<?php else:?>
					<div class="brief__text">
						<div class="red-dot"><span></span></div>
						<p><?=$text['desc']?></p>
					</div>
				<?php endif;?>
			<?php endforeach;?>
	

	</div>

	<div class="animate-circle"></div>

	<img src="<?=$atts['img']['url']?>" alt="" class="balloon">

	<p class="fill-brief"><span>покорить вершины легко!</span>Осталось только заполнить бриф</p>

</section>
<!-- end brief.html-->