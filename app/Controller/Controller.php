<?php

namespace app\Controller;

use app\Service\Components;
use app\View\View;

class Controller
{
    
    private $view;
    private $components;

    public function __construct() {
        $this->view = new View;
        $this->components = new Components;
    }

    protected function html_render()
    {
        return $this->view;
    }

    protected function components(String $file, Array $vars = [])
    {   

        return $this->components
        ->load($file)
        ->set($vars)
        ->render();
    }

    protected function navegation(Array $paths)
    {   

        $nav = '';

        foreach ($paths as $key => $value) {
            
            $nav .= $this->components('sub.php',[
                'title' => $key,
                'href' => "/$key",
                'class' => 'sub-menu',
                'submenu' => (function () use ($value) {
                    $sub = '';
                    foreach ($value as $k => $val) 
                    {
                        $sub .= $this->components('li.php', $val);
                    }

                    return $sub;
                })()
            ]);
        }

        return $nav;
    }
}