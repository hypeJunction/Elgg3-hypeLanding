<?php

namespace hypeJunction\Landing;

use Elgg\PluginBootstrap;

class Bootstrap extends PluginBootstrap {

	public function load() {

	}

	public function boot() {

	}

	public function init() {
		elgg_register_plugin_hook_handler('blocks', 'landing', SetLandingData::class);

		elgg_register_plugin_hook_handler('menus', 'menu:editor', AddCustomMenus::class);
		elgg_register_plugin_hook_handler('register', 'menu:landing:cta', LandingCta::class);

		elgg_register_plugin_hook_handler('register', 'menu:page', PageMenu::class);

		elgg_extend_view('elements/layout.css', 'theme/elements/landing.css');
	}

	public function ready() {

	}

	public function shutdown() {

	}

	public function activate() {

	}

	public function deactivate() {

	}

	public function upgrade() {

	}
}