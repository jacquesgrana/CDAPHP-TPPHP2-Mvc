<?php
namespace Digi\Keha\Kernel;
use Digi\Keha\Configuration\Config;

class Views {
    private string $html;
    private string $footer;
    private string $header;
    private string $head;

    public function setHtml(string $html):self
    {
        $this->html = Config::VIEWS.$html;
        return $this;
    }

    public function setHead(string $headHtml):self 
    {
        $this->head = Config::TEMPLATE.$headHtml;
        return $this;
    }

    public function setHeader(string $headerHtml):self 
    {
        $this->header = Config::TEMPLATE.$headerHtml;
        return $this;
    }

    public function setFooter(string $footerHtml):self 
    {
        $this->footer = Config::TEMPLATE.$footerHtml;
        return $this;
    }

    public function render(array $vars)
    {       
        extract($vars);
        include(dirname(__FILE__)."/../".$this->head);
        include(dirname(__FILE__)."/../".$this->header);
        include(dirname(__FILE__)."/../".$this->html);
        include(dirname(__FILE__)."/../".$this->footer);
    }
}