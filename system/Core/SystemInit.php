<?php


namespace System\Core;


use System\Exceptions\FileNotFoundException;

class SystemInit
{
    public function start()
    {
        $parts = $this->getUrlParts();
        $this->run($parts['controller'], $parts['method'], $parts['argument']);
    }

    private function getUrlParts()
    {
        $parts = [];

        if(!empty($_SERVER['PATH_INFO'])){
            $segments = explode('/', $_SERVER['PATH_INFO']);

            $parts['controller'] = ucfirst($segments[1])."Controller";

            if(!empty($segments[2]))
            {
                $parts['method'] = $segments[2];
            }
            else {
                $parts['method'] = 'index';
            }

            if(!empty($segments[3]))
            {
                $parts['argument'] = $segments[3];
            }
            else{
                $parts['argument'] = null;
            }

        }

        else
        {
            $parts = [
                'controller' => ucfirst(config('default_controller')).'Controller',
                'method' => 'index',
                'argument' => 'null'
            ];
        }
        return $parts;
    }

    private function run($controller, $method, $argument = null)
    {
        $controller_file = BASEDIR."/app/Controllers/{$controller}.php";
        if(is_file($controller_file)){

        }
        else {
            throw new FileNotFoundException("Controller file '{$controller_file}' does not exist.");
        }
    }
}