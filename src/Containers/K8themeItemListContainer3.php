<?php

namespace K8theme\Containers;

use Plenty\Plugin\Templates\Twig;

class K8themeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('K8theme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
