<?php
namespace App\Core;
use App\Core\Database;
use App\Core\ErrorController;

use Src\Controller\AccesCompteController;
use Src\Controller\CreerCompteController;
use Src\Controller\DashbordController;
use Src\Controller\SecurityController;
use Src\Entity\Profil;
use Src\Entity\Utilisateur;



class App{

    private static  array $dependencies;

    public static function dependencies(){

        if (empty(self::$dependencies)) {
            self::$dependencies =[

          "core"=>[
                        "router"=> new Router(),
                        "database"=>  Database::getInstance()->getConnection(),
                        "errorController"=>new ErrorController(),
                       
                    ],
            "controller"=>[
                            "accesCompteController"=> AccesCompteController::class,
                            "creerCompteController"=> CreerCompteController::class,
                            "dashboardController"=> DashbordController::class,
                            "securityController"=> SecurityController::class,
               ],     
      

            "entities"=>[

                        "utilisateur"=> new Utilisateur(),
                        "profil" => new Profil(),
                    ],

        ];
        }

    }

        public static function getDependencies(): array
    {
        self::dependencies();
        return self::$dependencies;
    }

    public static function get(string $dossier, string $class)
    {
        self::dependencies();
        if (isset(self::$dependencies[$dossier][$class])) {
            return self::$dependencies[$dossier][$class];
        }
        throw new \Exception("Dépendance '$class' dans la catégorie '$dossier' non trouvée.");
    }

    
    
  


}




