<?php

class FootballTeam
{
    private $namaTim = "";
    private $negara = "";
    private $tahun = 0;
    private $pemain = "";

    // konstruktor
    public function __construct($namaTim = "", $negara = "", $tahun = 0, $pemain = "")
    {
        $this->namaTim = $namaTim;
        $this->negara = $negara;
        $this->tahun = $tahun;
        $this->pemain = $pemain;
    }

    // set nama tim
    public function setNamaTim($namaTim)
    {
        $this->namaTim = $namaTim;
    }

    // get nama tim
    public function getNamaTim()
    {
        return $this->namaTim;
    }

    // set negara
    public function setNegara($negara)
    {
        $this->negara = $negara;
    }

    // get negara
    public function getNegara()
    {
        return $this->negara;
    }

    // set Tahun
    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }

    // get Tahun
    public function getTahun()
    {
        return $this->tahun;
    }

    // set Pemain
    public function setPemain($pemain)
    {
        $this->pemain = $pemain;
    }

    // get Pemain
    public function getPemain()
    {
        return $this->pemain;
    }

    // destruktor
    public  function __destruct(){}
}

?>