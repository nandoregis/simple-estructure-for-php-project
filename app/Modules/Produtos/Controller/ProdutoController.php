<?php

namespace app\Modules\Produtos\Controller;

use app\Controller\Controller;

class ProdutoController extends Controller
{
    
    public function __construct() {
        parent::__construct();
        parent::set_static_dir_view('Modules/Produtos/View/');
    }

    public function index($req) 
    { 
        
        parent::html_render()
        ->load('Home/index.php')
        ->set([
            'title' => 'Produtos',
            'header' => parent::components('View/Components/header.php'),
            'h2' => 'Produtos'
        ])
        ->display();
    }

    public function produto()
    {
        parent::html_render()
        ->load('Produto/index.php')
        ->set([
            'title' => 'Produtos',
            'header' => parent::components('View/Components/header.php'),
            'h2' => 'Produtos'
        ])
        ->display();
    }

}