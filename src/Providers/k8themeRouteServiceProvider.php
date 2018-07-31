<?php

namespace k8theme\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class K8themeRouteServiceProvider
 * @package K8theme\Providers
 */
class k8themeRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('MyAccount','k8theme\Controllers\k8themeController@getMyAccountPage');
    }
}
