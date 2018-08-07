<?php

namespace K8theme\Providers;

use Plenty\Plugin\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
			$this->getApplication()->register(K8themeRouteServiceProvider::class);

	}

}
