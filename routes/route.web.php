<?php

use Src\Controller\AccesCompteController;
use Src\Controller\CreerCompteController;
use Src\Controller\DashbordController;
use Src\Controller\SecurityController;



$route= [
        "/"=>[
                "controller"=>SecurityController::class,
                "action"=> "index"
        ],

        "/creerCompte"=>[
                "controller"=>CreerCompteController::class,
                "action"=> "index"
        ],

        "/accesCompte"=>[
                "controller"=>AccesCompteController::class,
                "action"=> "index"
        ],

        // "/dashboard"=>[
        //         "controller"=>DashbordController::class,
        //         "action"=> "index"
        // ],
       

        
    ];