<?php 

Class Categorie {

    private string $type;
    private array $films;

    public function __construct(string $type) {
        
        $this->type = $type;
        $this->films = [];
    }

    

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function addCategorieFilm(Film $film) {
        $this->films[] = $film;
    }

    public function afficherCategorieFilm() {
        $result = "<br><br><h1>Film de la $this</h1><br><ul>";

        foreach($this->films as $film) {
            $result .= "<br><li>$film</li>";
        }

        $result .= "</ul>";
        return $result;
    }

    public function __toString() {
        return "Catégorie : ". $this->type;
    }
}