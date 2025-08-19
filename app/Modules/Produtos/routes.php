<?php

use app\Middleware\AuthMiddleware;
use app\Modules\Produtos\Controller\ProdutoController;

    return [
        [   
            "route" => "/",
            "controller" => new ProdutoController,
            "method" => "index",
            "http" => ["GET", "POST"],
            "middlewares" => [new AuthMiddleware],
            "active" => true
        ],
           [
            "route" => "/{uuid}",
            "controller" => new ProdutoController,
            "method" => "delete",
            "http" => ["GET","POST"],
            "middlewares" => [new AuthMiddleware],
            "active" => true
        ],
    ];

