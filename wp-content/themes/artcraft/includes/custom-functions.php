<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 02.10.2017
 * Time: 14:22
 */
add_action( 'wp_ajax_sendForm', 'sendForm' );
add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );

add_action( 'wp_ajax_get_more_works', 'get_more_works' );
add_action( 'wp_ajax_nopriv_get_more_works', 'get_more_works' );
//
function sendForm() {
	if ( $_POST ) {
		// обрабатываем запрос
		$adminEmail = get_option('admin_email');
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$skype = $_POST['skype'];
		$service = "";
		$service .= (isset($_POST['service_mob'])) ? $_POST['service_mob']."," : "";
		$service .= (isset($_POST['service_supp'])) ? $_POST['service_supp']."," : "";
		$service .= (isset($_POST['service_site'])) ? $_POST['service_site']."," : "";
		$service .= (isset($_POST['service_seo'])) ? $_POST['service_seo'] : "";
		$text = $_POST['text'];
		$my_file = "";
		/*if (!empty($_FILES['file']['tmp_name'])) {
			$path = $_FILES['file']['name'];
			if (copy($_FILES['file']['tmp_name'], $path)) $my_file = $path;
		}*/
		if(!empty($_POST['file'])){
			$path = explode(',' , $_POST['file']);
			$my_file = $path;
		}
		$nameFile = "";
	
		

		$message = 'Имя: ' . $name . '<br>';
		$message .= 'Телефон: ' . $phone . '<br>';
		$message .= 'Услуга: ' . $service . '<br>';
		$message .= 'E-mail: ' . $email . '<br>';
		$message .= 'Skype: ' . $skype . '<br>';
		$message .= 'Сообщение: ' . $text . '<br>';
//		$message .= 'Файл: ' . $my_file . '<br>';
		if(is_array($my_file)){
			foreach ($my_file as $value){
				$nameFile .= basename($value).";";
			}
			$message .= 'Файлы: ' . $nameFile . '<br>';
		} else {
			$nameFile .= basename($my_file[0]);
			$message .= 'Файл: ' . $nameFile . '<br>';
		}
		
		if (wp_mail($adminEmail,'Заявка на обратный звонок', $message, 'content-type: text/html', $my_file)) {
			$result = [
				'result' => 'success',
				'message' => 'Ваше сообщение успешно отправлено'
			];
		} else {
			$result = [
				'result' => 'error',
				'message' => 'Возникла ошибка при отправке сообщения. Попробуйте позже'
			];
		}
		// возвращаем результат
		wp_send_json($result);
	}
	wp_die();
}

// cut text by symbol count
function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}

function get_more_works () { ?>

	<?php $portQuery = new WP_Query([
		'category_name' => 'portfolio',
		'posts_per_page' => $_POST['inpage'],
		'paged' => $_POST['page'],
//		'offset' => $_POST['count'],
	]);
	?>
	<?php $n = 0;?>
	<?php  while ( $portQuery->have_posts() ):?>
		<?php  $portQuery->the_post();  ?>
			<?php $n++;?>
				<div class="grid-item">
				<a class="grid-item__watch" href="<?= get_the_permalink(get_the_ID()); ?>">Посмотреть работу</a>

				<a class="grid-item__fancybox" href="<?php the_post_thumbnail_url()?>" data-fancybox="images" data-caption="
				<div class='portfolio__block-caption'>
					<span>Веб-дизайн для Мастер газ</span>
					<a href='#'>Смотреть работу на <span class='gradient'>behance.ru</span></a>
				</div">

				<span class="magnifier">
					<img src="<?php bloginfo('template_url')?>/img/full-size.svg" width="20" height="20" alt="">
				</span>
				</a>

                <a href="<?= get_the_permalink(get_the_ID()); ?>">
                    <?php the_post_thumbnail('medium')?>
                </a>
				<!--					<img class="grid-item__img" src="" alt="Баннер">-->
			</div>
	
	<?php endwhile;?>
		<input type="hidden" id="countItems" data-count="<?=$n?>" value="<?=$n?>">
<?php }?>