<?php
namespace Digi\Keha\Kernel;
use Digi\Keha\Configuration\Config;

class Dispatcher {
    private $controller;

    public function __construct()
    {
        $this->controller = Config::CONTROLLER.'Home';
        if (isset($_GET['controller'])) {           
            if(class_exists(Config::CONTROLLER.$_GET['controller'])) {
                $this->controller = Config::CONTROLLER.$_GET['controller'];
            }
        } 
    }

    public function Dispatch() {
        $cont = new $this->controller;
        $cont->index();
    }
}