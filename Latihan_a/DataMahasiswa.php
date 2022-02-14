<?php

// kelas DataMahasiswa
class DataMahasiswa{
    private $nim = 0;
    private $nama = "";
    private $jkelamin = "";
    private $prodi = "";
    private $semester = 0;

    // konstruktor
    public function __construct($nim = 0, $nama = "", $jkelamin = "", $prodi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jkelamin = $jkelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // set Nim
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // get Nim
    public function getNim()
    {
        return $this->nim;
    }

    // set Nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // get Nama
    public function getNama()
    {
        return $this->nama;
    }

    // set Jenis Kelamin
    public function setJKelamin($jkelamin)
    {
        $this->jkelamin = $jkelamin;
    }

    // get Jenis Kelamin
    public function getJKelamin()
    {
        return $this->jkelamin;
    }

    // set Program Studi
    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    // get Program Studi
    public function getProdi()
    {
        return $this->prodi;
    }

    // set Semester
    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    // get Semester
    public function getSemester()
    {
        return $this->semester;
    }

}

?>