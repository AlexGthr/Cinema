<?php

class Acteur extends Personne {

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

    }

    public function __toString() {
        return $this->nom . " " . $this->prenom. " ";
    }
}