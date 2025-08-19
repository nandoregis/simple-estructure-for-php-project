<?php

namespace app\Modules\Dashboard\Controller;

use app\Controller\Controller;
use app\Core\Navigation;


class DashboardController extends Controller
{

    public function __construct()
    {
       parent::__construct();
    }

    public function index() 
    {   
        
        $li = parent::navegation((new Navigation)->user());
        
        parent::html_render()
        ->load('Dashboard/View/Home/index.php')
        ->set([
            'title' => 'Titulo dashboard',
            'header' => parent::components('header.php'),
            'menu' => parent::components('menu.php',['li' => $li]),
            'texto' => 'Dashhoard'
        ])
        ->display();
    }
    
}