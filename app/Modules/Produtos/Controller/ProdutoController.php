<?php

namespace app\Modules\Produtos\Controller;

use app\Controller\Controller;

class ProdutoController extends Controller
{
    
    public function __construct() {
        parent::__construct();
    }

    public function index($req) 
    {   
        parent::html_render()
        ->load('Produtos/View/Home/index.php')
        ->set([
            'title' => 'Produtos',
            'header' => parent::components('header.php'),
            'h2' => 'Produtos'
        ])
        ->display();
    }

    public function delete()
    {
        
    }

}