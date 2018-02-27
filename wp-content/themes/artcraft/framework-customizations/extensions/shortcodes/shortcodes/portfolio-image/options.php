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
//	'count'     => [
//		'type'  => 'text',
//		'value' => '0',
//		'label' => __('Количество работ на странице', '{domain}'),
//	],
//	'paragraph'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Параграф', '{domain}'),
//	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
//	'title'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Текст', '{domain}'),
//	],
//	'title2'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Название', '{domain}'),
//	],
//	'h2'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Заголовок', '{domain}'),
//	],
//	'desc'     => [
//		'type'  => 'textarea',
//		'value' => '',
//		'label' => __('Описание', '{domain}'),
//	],
//	'slider' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить слайды', '{domain}'),
//		'template' => '{{- title }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
//			'title'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Картинки', '{domain}'),
//			],
//			'img'     => [
//				'type'  => 'multi-upload',
//				'value' => '',
//				'label' => __('Добавить картинки', '{domain}'),
//				'images_only' => true,
//			],
//			'href' => [
//				'type' => 'addable-popup',
//				'label' => __('Добавить текст и ссылку', '{domain}'),
//				'template' => '{{- text }}',
//				'size' => 'large', // small, medium, large
//				'limit' => 0, // limit the number of popup`s that can be added
//				'add-button-text' => __('добавить', '{domain}'),
//				'sortable' => true,
//				'popup-options' => [
//					'href'     => [
//						'type'  => 'text',
//						'value' => '',
//						'label' => __('Сылка', '{domain}'),
//					],
//					'text'     => [
//						'type'  => 'text',
//						'value' => '',
//						'label' => __('Текст', '{domain}'),
//					],
//				],
//			],
//
//			'class' => [
//				'type'  => 'select',
//				'value' => 'choice-3',
//				'attr'  => [ 'class' => 'custom-class', 'data-foo' => 'bar' ],
//				'label' => __('Количество картинок', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'choices' => [
//					'' => '---',
//					'one-item' => __('Одна', '{domain}'),
//					'two-items' => [
//						'text' => __('Две', '{domain}'),
//						'attr' => ['data-foo' => 'bar'],
//					],
//					'three-items' => __('Три', '{domain}'),
//				],
//			]
//
//		],
//	],
];