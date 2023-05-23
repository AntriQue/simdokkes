<?php

use Bpjs\Bridging\Pcare\BridgePcare;

require "vendor/autoload.php";

class ServiceReferensi
{

    protected $bridging;

    public function __construct()
    {
        $this->bridging = new BridgePcare;
    }
    public function diagnosa($kode)
    {
        $endpoint = "referensi/diagnosa/($kode)";
        $diagnosa = $this->bridging->getRequest($endpoint);
        return $diagnosa;
    }

}