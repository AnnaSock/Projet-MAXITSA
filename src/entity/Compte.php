<?php
namespace Src\Entity;

use App\Core\Abstracts\AbstractEntity;
class Compte extends AbstractEntity{

    private int $id;
    private float $solde;
    private int $matricule;
    private TypeCompte $typeCompte;

// attributs navigationnels
    private Utilisateur $utilisateur;
    private array $transactions;

    public function __construct($id=0, $solde=0, $matricule=0, $typeCompte){
        $this->id=$id;
        $this->solde=$solde;
        $this->matricule=$matricule;
        $this->typeCompte=$typeCompte;
        $this->utilisateur= new Utilisateur();
        $this->transactions=[];

         
    }



    public  function toArray():array{
        return [
            "id" => $this->id,
            "solde" => $this->solde,
            "matricule" => $this->matricule,
            "typeCompte" => $this->typeCompte,
        ];
     }
    public static function toObject(array $data):static{
            return new static(
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['typeCompte'],
            );
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of typeCompte
     */ 
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * Set the value of typeCompte
     *
     * @return  self
     */ 
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    /**
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get the value of transactions
     */ 
    public function getTransactions()
    {
        return $this->transactions;
    }

    public function addTransaction($transaction):array
    {
        return $this->transactions[]=$transaction;
    }
}