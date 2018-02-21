<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'E-mail', '{domain}' ),
				'value' => '',
			],
			'vk' => [
				'type'  => 'text',
				'label' => __( 'VK', '{domain}' ),
				'value' => '',
			],
			'facebook' => [
				'type'  => 'text',
				'label' => __( 'Facebook', '{domain}' ),
				'value' => '',
			],
			'telegram' => [
				'type'  => 'text',
				'label' => __( 'Telegram', '{domain}' ),
				'value' => '',
			],
			'whatsapp' => [
				'type'  => 'text',
				'label' => __( 'Whatsapp', '{domain}' ),
				'value' => '',
			],
			'viber' => [
				'type'  => 'text',
				'label' => __( 'Viber', '{domain}' ),
				'value' => '',
			],
		],
	],
	'panel_h' => [
		'title'   => __( 'Заголовок', '{domain}' ),
		'options' => [
			'text' => [
				'type'  => 'text',
				'label' => __( 'Заголовок', '{domain}' ),
				'value' => '',
			],
			'text2' => [
				'type'  => 'text',
				'label' => __( 'Заголовок2', '{domain}' ),
				'value' => '',
			],
		],
	],
];


