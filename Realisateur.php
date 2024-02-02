<?php

class Realisateur extends Personne {

    private array $films;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        $this->films = []; // Tableau des films réalisé
    }

    // Method pour ajouter un film dans la filmographie d'un réalisateur
    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    // Method pour afficher la filmographie d'un réalisateur
    public function afficherFilm() {

        $dates = [];
        foreach ($this->films as $key => $film)
        {
            $dates[$key] = $film->getDateDeSortie()->format('Y-m-d');
        }
 
        array_multisort($dates, SORT_DESC, $this->films);

        $result = "<br><br><h1> Film réalisé par $this : </h1><ul>";

        foreach($this->films as $film) {
            $result .= "<li>$film</li>";
        }

        $result .= "</ul>";
        return $result;
    }
}