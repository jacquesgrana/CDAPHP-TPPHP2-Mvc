<?php
namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Configuration\Config;

class Liste {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html')
        ->setHeader('header.html')
        ->setHtml('liste.html')
        ->setFooter('footer.html')
        ->render([
            'textHeader' => 'Texte du header de Liste',
            'textFooter' => 'Texte du footer de Liste',
            'pageName' => 'MVC PHP - Page Liste',
            'liste' => 'Texte du main de Liste',
            'liste2' => 'Texte 2 du main de Liste',
            'endpoint' => Config::getEndpoint()
        ]);
    }
}