<?php
namespace Src\Entity;

use App\Core\Abstracts\AbstractEntity;
class Profil extends AbstractEntity{

    private int $id;
    private string $nomProfil;

    // attributs navigationnels
    private array $utilisateurs;


    public function __construct($id=0, $nomProfil=''){
            $this->id=$id;
            $this->nomProfil=$nomProfil;
            $this->utilisateurs=[];

    }


     public  function toArray():array{
        return [
            "id" => $this->id,
            "nomProfil" => $this->nomProfil,
        ];
     }

    public static function toObject(array $data):static{
            return new static(
                $data['id'],
                $data['nom'],
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
     * Get the value of nomProfil
     */ 
    public function getNomProfil()
    {
        return $this->nomProfil;
    }

    /**
     * Set the value of nomProfil
     *
     * @return  self
     */ 
    public function setNomProfil($nomProfil)
    {
        $this->nomProfil = $nomProfil;

        return $this;
    }

    /**
     * Get the value of utilisateurs
     */ 
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur($utilisateur):array
    {
        return $this->utilisateurs[]=$utilisateur;
    }
}