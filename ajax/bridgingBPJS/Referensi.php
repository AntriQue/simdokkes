<?php

require "vendor/autoload.php";

class Referensi
{
    protected $serviceReferensi;

    public function __construct()
    {
        $this->serviceReferensi = new serviceReferensi;
    }
    public function getDiagnosa($kode)
    {
        $diagnosa = $this->serviceReferensi->diagnosa($kode);
        return $diagnosa;
    }

}


    $referensi = new Referensi;
    echo $referensi->getDiagnosa("a32");