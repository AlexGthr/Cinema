<h1> CINEMA </h1>

<?php 

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$realisateur1 = new Realisateur("Gauthier", "Alex", "M", "17-01-1997");

$film1 = new Film ("PHP - le film", "25-08-2024", 66, "Un film ou un developpeur sauve la planete grâce à une function PHP", $realisateur1);
$film2 = new Film ("Batman - Return", "25-09-2025", 74, "L'histoire de Batman, le retour", $realisateur1);

echo $realisateur1;
echo $realisateur1->afficherFilm();
echo "<br><br>";
echo $film1;