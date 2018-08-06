<?php

namespace k8theme\Providers;

use Plenty\Plugin\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
			$this->getApplication()->register(k8themeRouteServiceProvider::class); 

	}

}
