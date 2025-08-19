<?php

use app\Middleware\AuthMiddleware;
use app\Modules\Dashboard\Controller\DashboardController;

    return [
        [   
            "route" => "/",
            "controller" => new DashboardController,
            "method" => "index",
            "http" => ["GET", "POST"],
            "middlewares" => [new AuthMiddleware],
            "active" => true
        ]
    ];

