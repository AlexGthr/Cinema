<?php

class Acteur extends Personne {

    // Tableau ROLE qui recupère les $role de l'acteur
    private array $roles;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance); // Construct parent

        // Tableau
        $this->roles = [];
    }

    public function addActeur(Role $role) {
        $this->roles[] = $role;
    }

    // Method pour afficher les roles de l'acteur
    public function afficherRoleActeur() {
        $result = "<br><br><h1>$this : </h1><br><ul>";

        foreach($this->roles as $role) {
            $result .= "<br><li>$role</li>";
        }

        $result .= "</ul>";
        return $result;
    } 

    // To string
    public function __toString() {
        return $this->nom . " " . $this->prenom. " ";
    }
}