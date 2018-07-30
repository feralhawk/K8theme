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

	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher)
	    {
	        $eventDispatcher->listen('IO.tpl.my-account', function(TemplateContainer $container, $templateData)
	        {
	          $container->setTemplate('k8theme::MyAccount.k8themeMyAccount');
						return false;
	        }, 0);

	    }

}
