<?php

include_once __DIR__ . "/../models/Movie.php";
include_once __DIR__ . "/../models/Genere.php";

$azione = new Genere(1, "Azione");
$avventura = new Genere(2, "Avventura");
$fantasy = new Genere(3, "Fantasy");
$Epico = new Genere(4, "Epico");
$thriller = new Genere(5, "thriller");

$movies = [
  new Movie(1, "Il Gladiatore", "Lorem ipsum dolor sit amet consectetur adipisicing.", [$Epico, $azione], "https://pad.mymovies.it/filmclub/2001/01/022/imm.jpg"),
  new Movie(2, "Avatar", "Lorem ipsum dolor sit amet consectetur adipisicing.", [$fantasy, $avventura], "https://pad.mymovies.it/filmclub/2008/03/090/immpg3.jpg"),
  new Movie(3, "Joker", "Lorem ipsum dolor sit amet consectetur adipisicing.", [$thriller], "https://pad.mymovies.it/filmclub/2018/06/066/locandina.jpg")
]


?>

