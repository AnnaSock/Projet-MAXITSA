<?php
namespace App\Core;
use App\Core\Database;
use App\Core\ErrorController;
use App\Core\Router;
use Src\Entity\Compte;
use Src\Entity\Profil;
use Src\Entity\Transaction;
use Src\Entity\Utilisateur;
use Src\Service\CompteService;
use Src\Service\ProfilService;
use Src\Service\TransactionService;
use Src\Service\UtilisateurService;
use Src\Repository\CompteRepository;
use Src\Repository\ProfilRepository;
use Src\Repository\TransactionRepository;
use Src\Repository\UtilisateurRepository;


class App{

    protected static array  $dependencies;

    public static function dependencies(){

        if (empty(self::$dependencies)) {
            self::$dependencies =[

          "core"=>[
                        "router"=> new Router(),
                        // "database"=> new Database(),
                        // "errorController"=>new ErrorController,
                        // "session"=>new Session(),
                        // "validator"=> new Validator()
                    ],
        
        //   "services"=>[
        //                 "compteService"=> new CompteService(),
        //                 "transactionService"=> new TransactionService(),
        //                 "profilService"=> new ProfilService,
        //                 "utilisateurService"=> new UtilisateurService()
        //             ],



        //   "reporitories"=>[
        //                 "compteRepository"=> new CompteRepository(),
        //                 "transactionRepository"=> new TransactionRepository(),
        //                 "profilRepository"=> new ProfilRepository,
        //                 "utilisateurRepository"=> new UtilisateurRepository()
                        

        //             ],

        //     "entities"=>[

        //                 "utilisateur"=> new Utilisateur(),
        //                 "compte"=> new Compte(),
        //                 "profil" => new Profil(),
        //                 "transaction"=> new Transaction(),
        //             ],

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




