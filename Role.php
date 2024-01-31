<?php 

class Role {

    private string $personnage;
    private Acteur $acteur;
    private Film $films;
    private array $acteurPourRole;

    public function __construct(string $personnage, Acteur $acteur, Film $films) {
        $this->personnage = $personnage;
        $this->acteur = $acteur;
        $this->acteur->addActeur($this);
        $this->films = $films;
        $this->films->addRoleFilm($this);
        $this->acteursPourRole = [];

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

    public function addCasting(Casting $acteursPourRole) {
        $this->acteursPourRole[] = $acteursPourRole;
    }

    public function getInfosRole() {
        $result = "<br><br><h1>$this a été joué par les acteurs suivant : </h1><br><ul>";

        foreach($this->acteursPourRole as $acteurPourRole) {
            $result .= "<br><li>$acteurPourRole</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->personnage;
    }
}