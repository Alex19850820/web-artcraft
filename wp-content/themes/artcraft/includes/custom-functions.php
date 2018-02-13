<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 02.10.2017
 * Time: 14:22
 */
add_action( 'wp_ajax_sendForm', 'sendForm' );
add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );
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
		if (!empty($_FILES['file']['tmp_name'])) {
			$path = $_FILES['file']['name'];
			if (copy($_FILES['file']['tmp_name'], $path)) $my_file = $path;
		}
		
		$message = 'Имя: ' . $name . '<br>';
		$message .= 'Телефон: ' . $phone . '<br>';
		$message .= 'Услуга: ' . $service . '<br>';
		$message .= 'E-mail: ' . $email . '<br>';
		$message .= 'Skype: ' . $skype . '<br>';
		$message .= 'Сообщение: ' . $text . '<br>';
		$message .= 'Файл: ' . $my_file . '<br>';
		
		
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