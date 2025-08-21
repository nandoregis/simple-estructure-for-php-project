<?php

namespace app\Modules\Dashboard\Controller;

use app\Controller\Controller;
use app\Core\Navigation;


class DashboardController extends Controller
{

    public function __construct()
    {
       parent::__construct();
        parent::set_static_dir_view('Modules/Dashboard/View/');

    }

    public function index() 
    {   
        
        $li = parent::navegation_elements((new Navigation)->user());
        
        parent::html_render()
        ->load('Home/index.php')
        ->set([
            'title' => 'Titulo dashboard',
            'header' => parent::components('View/Components/header.php'),
            'menu' => parent::components('View/Components/menu.php',['li' => $li]),
            'texto' => 'Dashboard'
        ])
        ->display();
    }
    
}