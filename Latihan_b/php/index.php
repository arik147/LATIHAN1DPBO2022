<?php

# pemanggilan file
include "FootballTeam.php";

# tim 1 setter
$tim1 = new FootballTeam();
$tim1->setNamaTim("Persib");
$tim1->setNegara("Indonesia");
$tim1->setTahun(1933);
$tim1->setPemain("Mario Jardel");

# tim 2 konstruktor
$tim2 = new FootballTeam("Manchester United", "Inggris", 1878, "Cristiano_Ronaldo");

// tampilkan mahasiswa 1
echo "Tim Pertama". "<br>";
echo "Nama Tim : ". $tim1->getNamaTim(). "<br>";
echo "Negara : ". $tim1->getNegara(). "<br>";
echo "Tahun Berdiri : ". $tim1->getTahun(). "<br>";
echo "Pemain : ". $tim1->getPemain(). "<br>";

// tampilkan mahasiswa 1
echo "<br>". "Tim Kedua". "<br>";
echo "Nama Tim : ". $tim2->getNamaTim(). "<br>";
echo "Negara : ". $tim2->getNegara(). "<br>";
echo "Tahun Berdiri : ". $tim2->getTahun(). "<br>";
echo "Pemain : ". $tim2->getPemain(). "<br>";

?>