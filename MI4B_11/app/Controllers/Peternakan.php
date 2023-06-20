<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\PeternakanHewan;

class Peternakan extends BaseController
{
    //step2 membuat sebuah property

    protected $peternakan;

    //step 3 membuat fungsi construct untuk insasi clas model
    public function __construct()
    {
        //step 4 memanggil properti film
        $this->peternakan = new PeternakanHewan();
    }

    public function index()
    {
        $data['data_peternakan'] = $this->peternakan->getPeternakan();
        return view("peternakan/index", $data);
    }
}
