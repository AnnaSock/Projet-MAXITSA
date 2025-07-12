<?php

namespace Src\Repository;

use App\Core\Abstracts\AbstractRepository;
use App\Core\App;
use \PDO;
use Src\Entity\Utilisateur;
class UtilisateurRepository extends AbstractRepository{
               
                        
     
     public function selectByNumeroAndPassword($numero, $password):Utilisateur|null{
               $sql= "SELECT * FROM utilisateur WHERE numero= :numero AND password= :password";
               $requete= $this->pdo->prepare($sql);
               $requete->bindParam(':numero', $numero);
               $requete->bindParam(':password', $password);
               $requete->execute();

               $personne=$requete->fetch(PDO::FETCH_ASSOC); 
               

               if(!isset($personne) && $personne['profil']= App::get('entities','profil')){
                    $utilisateur= App::get('entities', 'utilisateur');
                    $utilisateur->toObject($personne);
                    return $utilisateur;
     }
               return null;
     }


     public  function selectAll(){
          
     }
     public  function insert(){}
     public  function update(){}
     public  function delete(){}
     public  function selectById(){}
     public  function selectBy(array $filter){}




}

