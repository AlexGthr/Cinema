<?php

class Realisateur extends Personne {

    private array $films;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        $this->films = []; // Tableau des films réalisé
    }

    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    public function afficherFilm() {
        $result = "<br><br><h1> Film réalisé par $this : </h1><br><ul>";

        foreach($this->films as $film) {
            $result .= "<br><li>$film</li>";
        }

        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }

}