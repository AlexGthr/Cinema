<?php

class Acteur extends Personne {

    private array $casting;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance); // Construct parent

        // Tableau
        $this->casting = [];
    }

    // Method pour ajouter l'assosiation Casting pour récupéré les informations film/role
    public function addCasting(Casting $casting) {
        $this->casting[] = $casting;
    }

    // Method pour afficher les films dans laquelle l'acteur à jouer
    public function afficherFilmographie() {
        $result = "<br><br><h1>$this a joué dans les films suivant : </h1><br><ul>";

        foreach($this->casting as $cast) {
            $result .= "<br><li>".$cast->getFilmographie()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    // To string
    public function __toString() {
        return $this->nom . " " . $this->prenom. " ";
    }
}