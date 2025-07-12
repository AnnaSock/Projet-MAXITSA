<?php
namespace Src\Entity;

use App\Core\Abstracts\AbstractEntity;

class Utilisateur extends AbstractEntity{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $password;
    private string $numeroCarte;
    private string $photoRecto;
     private string $photoVerso;
     private array $numero;

    //  attribut navigationnels
     private Profil $profil;
     private array $compte;

     public function __construct($id=0 , $nom='', $prenom='', $adresse='', $password='', $numeroCarte='', $photoRecto='', $photoVerso=''){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->password=$password;
        $this->numeroCarte=$numeroCarte;
        $this->photoRecto=$photoRecto;
        $this->photoVerso=$photoVerso;
        $this->numero=[];

        $this->profil= new Profil();
        $this->compte=[];
     }


    public  function toArray():array{
        return [
            "id" => $this->id,
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "adresse" => $this->adresse,
            "password" => $this->password,
            "numeroCarte" => $this->numeroCarte,
            "photoRecto" => $this->photoRecto,
            "photoVerso" => $this->photoVerso,
            "numero" => $this->numero,

        ];
     }
    public static function toObject(array $data):static{
            return new static(
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['adresse'],
                $data['password'],
                $data['numero_carte'],
                $data['photoRecto'],
                $data['photoVerso'],
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of numeroCarte
     */ 
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * Set the value of numeroCarte
     *
     * @return  self
     */ 
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;

        return $this;
    }

    /**
     * Get the value of photoRecto
     */ 
    public function getPhotoRecto()
    {
        return $this->photoRecto;
    }

    /**
     * Set the value of photoRecto
     *
     * @return  self
     */ 
    public function setPhotoRecto($photoRecto)
    {
        $this->photoRecto = $photoRecto;

        return $this;
    }

     /**
      * Get the value of photoVerso
      */ 
     public function getPhotoVerso()
     {
          return $this->photoVerso;
     }

     /**
      * Set the value of photoVerso
      *
      * @return  self
      */ 
     public function setPhotoVerso($photoVerso)
     {
          $this->photoVerso = $photoVerso;

          return $this;
     }

     /**
      * Get the value of numero
      */ 
     public function getNumero()
     {
          return $this->numero;
     }

     public function addNumero($numero):array
     {
          return $this->numero[]=$numero;
     }

     /**
      * Get the value of profil
      */ 
     public function getProfil()
     {
          return $this->profil;
     }

     /**
      * Set the value of profil
      *
      * @return  self
      */ 
     public function setProfil($profil)
     {
          $this->profil = $profil;

          return $this;
     }

     /**
      * Get the value of compte
      */ 
     public function getCompte()
     {
          return $this->compte;
     }

     public function addCompte($compte):array
     {
        return $this->compte[]=$compte;
     }
}