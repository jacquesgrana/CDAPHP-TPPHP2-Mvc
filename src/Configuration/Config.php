<?php

namespace Digi\Keha\Configuration;

class Config
{
    public const CONTROLLER = 'Digi\Keha\Controller\\';
    public const VIEWS = 'Views/';
    public const TEMPLATE = 'Views/Template/';

    public static function getEndpoint()
    {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $protocol = 'https';
            }
        }
        return $protocol . '://' . $_SERVER['HTTP_HOST'] . '/';
    }
}
