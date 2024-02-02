<?php 

// Class PARENT de ACTEUR ET REALISATEUR
class Personne {

    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateDeNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }
    

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe(): string
    {
        return $this->sexe;
    } 
    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance(): DateTime
    {
        return $this->dateDeNaissance;
    }
    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    function __toString() {
        
        return $this->nom . " " . $this->prenom;
    }
}