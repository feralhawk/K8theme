<?php

namespace k8theme\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class k8themeRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','k8theme\Controllers\ContentController@sayHello');
    }
}
