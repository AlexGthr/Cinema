<?php 

class Film {
    
    private string $titre;
    private DateTime $dateDeSortie;
    private int $duree;
    private string $synopsis;
    private Realisateur $realisateur;

    public function __construct(string $titre, string $dateDeSortie, int $duree, string $synopsis, Realisateur $realisateur) {

        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this);
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

    public function __toString() {
        return "« ". $this->titre . " » sortie le " . $this->dateDeSortie->format("d/m/Y") . " à une durée de ". $this->duree . " minutes. <br><br> Synopsis : ". $this->synopsis. "<br> réalisé par : ". $this->realisateur;
    }

}