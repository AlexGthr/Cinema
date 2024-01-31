<?php 

class Film {
    
    private string $titre;
    private DateTime $dateDeSortie;
    private int $duree;
    private string $synopsis;
    private Realisateur $realisateur; 
    private Categorie $categorie; // Tableau recupération role film
    private array $casting;

    public function __construct(string $titre, string $dateDeSortie, int $duree, string $synopsis, Realisateur $realisateur, Categorie $categorie) {

        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this);
        $this->categorie = $categorie;
        $this->categorie->addCategorieFilm($this);
        $this->casting = []; // Tableau récupération casting
    }

    

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of dateDeSortie
     */ 
    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }
    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of synopsis
     */ 
    public function getSynopsis()
    {
        return $this->synopsis;
    }
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of realisateur
     */ 
    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }
    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
    
    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    // Method pour ajouter l'assosiation Casting et récupéré les informations Acteur/Role
    public function addCasting(Casting $casting) {
        $this->casting[] = $casting;
    }

    // Method qui affiche un résumé complet du film
    public function getInfosFilm() {
        return "« ". $this->titre . " » sortie le " . $this->dateDeSortie->format("d/m/Y") . " à une durée de ". $this->duree . " minutes. <br>".$this->categorie." <br><br> Synopsis : ". $this->synopsis. "<br> réalisé par : ". $this->realisateur;
    }

    // Method qui affiche le casting d'un film, (Role -> Acteur)
    public function getRoleActeur() {
        $result = "<h1>Casting du film $this<br></h1>";

        foreach($this->casting as $cast) {
            $result .= "<br><li> $cast </li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->titre;
    }



}