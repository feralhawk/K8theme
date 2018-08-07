<?php

namespace K8theme\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class K8themeRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','K8theme\Controllers\ContentController@sayHello');
    }
}
