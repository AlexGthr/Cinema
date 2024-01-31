<?php 

class Role {

    private string $personnage;
    private Acteur $acteur;
    private Film $films;

    public function __construct(string $personnage, Acteur $acteur, Film $films) {
        $this->personnage = $personnage;
        $this->acteur = $acteur;
        $this->acteur->addActeur($this);
        $this->films = $films;
        $this->films->addRoleFilm($this);

    }

    /**
     * Get the value of personnage
     */ 
    public function getPersonnage()
    {
        return $this->personnage;
    } 
    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get the value of acteur
     */ 
    public function getActeur(): Acteur
    {
        return $this->acteur;
    }
    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get the value of films
     */ 
    public function getFilms(): Film
    {
        return $this->films;
    }
    public function setFilms(Film $films)
    {
        $this->films = $films;

        return $this;
    }

    public function __toString() {
        return $this->personnage." : " . $this->acteur;
    }
}