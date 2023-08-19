<?php
namespace Digi\Keha\Controller;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Configuration\Config;

class Index {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html')
        ->setHeader('header.html')
        ->setHtml('index.html')
        ->setFooter('footer.html')
        ->render([
            'textHeader' => 'Texte du header de Index',
            'textFooter' => 'Texte du footer de Index',
            'pageName' => 'MVC PHP - Page Index',
            'var' => 'Texte du main de Index',
            'var2' => 'Texte 2 du main de Index',
            'endpoint' => Config::getEndpoint()
        ]);
    }
}