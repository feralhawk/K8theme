<?php

namespace K8theme\Containers;

use Plenty\Plugin\Templates\Twig;

class K8themeCertifiedByContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('K8theme::Containers.FooterServices.CertifiedBy');
    }
}
