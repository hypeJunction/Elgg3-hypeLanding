<?php

namespace hypeJunction\Landing;

use Elgg\Hook;

class AddCustomMenus {

	public function __invoke(Hook $hook) {

		$menus = $hook->getValue();

		$menus[] = 'landing:cta';

		return $menus;
	}
}