<?php 

class Casting {

    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct(Film $film, Acteur $acteur, Role $role) {

        $this->film = $film;
        $this->film->addCasting($this);
        $this->acteur = $acteur;
        $this->acteur->addCasting($this);
        $this->role = $role;
        $this->role->addCasting($this);
        
    }

    /**
     * Get the value of film
     */ 
    public function getFilm(): Film
    {
        return $this->film;
    }
    public function setFilm(Film $film)
    {
        $this->film = $film;

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
     * Get the value of role
     */ 
    public function getRole(): Role
    {
        return $this->role;
    }
    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    public function getFilmographie() {
        return $this->film;
    }

    public function  __toString() {
        return $this->role." / ".$this->acteur;
    }
}