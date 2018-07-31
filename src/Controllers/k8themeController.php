<?php

namespace k8theme\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class k8themeController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getMyAccountPage(Twig $twig):string
    {
        return $twig->render('k8theme::k8themeMyAccount');
    }
}
