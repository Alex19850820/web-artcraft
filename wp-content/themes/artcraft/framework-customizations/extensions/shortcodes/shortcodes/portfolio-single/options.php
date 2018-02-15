<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
	/*'title'     => [
		'type'  => 'text',
		'value' => 'наши результаты',
		'label' => __('Заголовок', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
	'title2'     => [
		'type'  => 'text',
		'value' => 'Наша миссия - Ваша красота',
		'label' => __('Заголовок поста', '{domain}'),
	],*/
	'first_href'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Наша работа первая ссылка', '{domain}'),
	],
	'second_href'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Наша работа вторая ссылка', '{domain}'),
	],
	'h2'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Заголовок акции', '{domain}'),
	],
	'desc'     => [
		'type'  => 'textarea',
		'value' => '',
		'label' => __('Описание акции', '{domain}'),
	],
	'content' => [
		'type' => 'addable-popup',
		'label' => __('Добавить контент', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
			],
			'h2'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Заголовок', '{domain}'),
			],
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название', '{domain}'),
			],
			'desc'     => [
				'type' => 'addable-popup',
				'label' => __('Добавить текст', '{domain}'),
				'template' => '{{- desc }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'desc' => [
						'type' => 'text',
						'value' => '',
						'label' => __('Текст', '{domain}'),
					],
				],
			],
		],
	],
	
];