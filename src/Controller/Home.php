<?php
namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Configuration\Config;

class Home {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html')
        ->setHeader('header.html')
        ->setHtml('home.html')
        ->setFooter('footer.html')
        ->render([
            'textHeader' => 'Texte du header de Accueil',
            'textFooter' => 'Texte du footer de Accueil',
            'pageName' => 'MVC PHP - Page Accueil',
            'title' => 'Texte du main de Accueil',
            'title2' => 'Texte 2 du main de Accueil',
            'endpoint' => Config::getEndpoint()
        ]);
    }
}