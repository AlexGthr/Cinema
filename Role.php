<?php 

class Role {

    private string $personnage;
    private array $acteurs;

    public function __construct(string $personnage) {
        $this->personnage = $personnage;
        $this->acteurs = [];

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

    // Method pour ajouter l'assosiation Casting et récupéré les informations Film/Acteur
    public function addCasting(Casting $acteur) {
        $this->acteurs[] = $acteur;
    }

    // Method pour afficher quel acteur à joué ce role
    public function getInfosRole() {
        $result = "<br><br><h1>$this a été joué par les acteurs suivant : </h1><br><ul>";

        foreach($this->acteurs as $acteur) {
            $result .= "<br><li>".$acteur->getActeur()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return $this->personnage;
    }
}