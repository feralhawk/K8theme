<?php

namespace k8theme\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class ThemeServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{

	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher)
	    {
	        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
	        {
	           $partial->set('page-design', 'k8theme::MyAccount.k8themeMyAccount');
	        }, 0);
	        return false;
	    }

}
