<?php

namespace hypeJunction\Landing;

use Elgg\Hook;
use ElggMenuItem;

class PageMenu {

	/**
	 * Setup page menu
	 *
	 * @param Hook $hook Hook
	 */
	public function __invoke(Hook $hook) {

		$menu = $hook->getValue();
		/* @var $menu \Elgg\Menu\MenuItems */

		$menu->add(ElggMenuItem::factory([
			'name' => 'admin:theme:landing',
			'text' => elgg_echo('admin:theme:landing'),
			'href' => 'admin/theme/landing',
			'section' => 'theme',
			'context' => ['admin'],
		]));

	}
}
