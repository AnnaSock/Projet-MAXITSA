<?php
namespace Src\Entity;



class Transaction{

    private int $id;
    private float $montant;
    private string $date;
    private TypeTransaction $typeTransaction;
    private Compte $compte;



    public function __construct($id=0, $montant=0, $date='', $typeTransaction=''){
            $this->id=$id;
            $this->montant=$montant;
            $this->date=$date;
            $this->typeTransaction=$typeTransaction;
            $this->compte=new Compte();
    }



    public  function toArray():array{
        return [
            "id" => $this->id,
            "montant" => $this->montant,
            "date" => $this->date,
            "typeTransaction" => $this->typeTransaction,
        ];
     }
    public static function toObject(array $data):static{
            return new static(
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['typeTransaction'],
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
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of typeTransaction
     */ 
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * Set the value of typeTransaction
     *
     * @return  self
     */ 
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;

        return $this;
    }

    /**
     * Get the value of compte
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of compte
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }
}