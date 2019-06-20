<?php

return [
	'bootstrap' => \hypeJunction\Landing\Bootstrap::class,

	'actions' => [
		'landing/editor/save' => [
			'controller' => \hypeJunction\Landing\SaveLandingDataAction::class,
			'access' => 'admin',
		],
	],

	'views' => [
		'default' => [
			'theme/' => elgg_get_data_path() . 'theme/',
		],
	],
];
