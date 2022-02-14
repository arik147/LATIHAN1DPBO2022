<?php

// panggil file
include "DataMahasiswa.php";

// set mahasiswa 1
$mahasiswa1 = new DataMahasiswa();
$mahasiswa1->setNim(2007392);
$mahasiswa1->setNama("Arik Rizki Akbar");
$mahasiswa1->setJKelamin("Laki-Laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

// konstruktor mahasiswa 2
$mahasiswa2 = new DataMahasiswa(2007394, "Alifa NS", "Perempuan", "T. Sipil", 4);

// tampilkan mahasiswa 1
echo "Mahasiswa 1". "<br>";
echo "NIM : ". $mahasiswa1->getNim(). "<br>";
echo "Nama : ". $mahasiswa1->getNama(). "<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getJKelamin(). "<br>";
echo "Program Studi : ". $mahasiswa1->getProdi(). "<br>";
echo "Semester : ". $mahasiswa1->getSemester(). "<br>";

// tampilkan mahasiswa 2
echo "<br>". "Mahasiswa 2". "<br>";
echo "NIM : ". $mahasiswa2->getNim(). "<br>";
echo "Nama : ". $mahasiswa2->getNama(). "<br>";
echo "Jenis Kelamin : ". $mahasiswa2->getJKelamin(). "<br>";
echo "Program Studi : ". $mahasiswa2->getProdi(). "<br>";
echo "Semester : ". $mahasiswa2->getSemester(). "<br>";

?>