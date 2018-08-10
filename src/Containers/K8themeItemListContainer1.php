<?php

namespace K8theme\Containers;

use Plenty\Plugin\Templates\Twig;

class K8themeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('K8theme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
