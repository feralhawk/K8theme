<?php

namespace k8theme\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('k8theme::content.k8theme');
    }
}
