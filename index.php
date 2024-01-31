<h1> CINEMA </h1>

<?php 

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Réalisateur de film
$realisateur1 = new Realisateur("Gauthier", "Alex", "M", "17-01-1997");

//  Acteur de film
$acteur1 = new Acteur("Gthr", "Alx", "M", "01-01-1997");
$acteur2 = new Acteur("Test", "Teste", "F", "02-02-1997");

// Categorie de film
$categorie1 = new Categorie("Horreur");
$categorie2 = new Categorie("Comics");
$categorie3 = new Categorie("Science-Fiction");

// Film
$film1 = new Film ("PHP - le film", "25-08-2024", 66, "Un film ou un developpeur sauve la planete grâce à une function PHP", $realisateur1, $categorie1);
$film2 = new Film ("Batman - Return", "25-09-2025", 74, "L'histoire de Batman, le retour", $realisateur1, $categorie1);

// Role de film actuel
$role1 = new Role("Spider-Man", $acteur1, $film1);
$role2 = new Role("BatMan", $acteur1, $film1);

echo $realisateur1;
echo $realisateur1->afficherFilm();
echo $categorie1->afficherCategorieFilm();
echo $film1->afficherRoleFilm();
echo $acteur1->afficherRoleActeur();