<?php

namespace App\Models;

use CodeIgniter\Model;

class PeternakanHewan extends Model
{
    public function getPeternakan(){

        $data = [
            [
                "nama_hewan" => "sapi",
                "jumlah"     => "6 ekor",
                "harga_jual"  => "90 juta"
            ],
            [
                "nama_hewan" => "kerbau",
                "jumlah"     => "5 ekor",
                "harga_jual"  => "60 juta"
            ],
            [
                "nama_hewan" => "ayam",
                "jumlah"     => "60 ekor",
                "harga_jual"  => "50 juta"
            ],
            [
                "nama_hewan" => "bebek",
                "jumlah"     => "65 ekor",
                "harga_jual"  => "70 juta"
            ],
            [
                "nama_hewan" => "kambing",
                "jumlah"     => "16 ekor",
                "harga_jual"  => "50 juta"
            ],
        ];
        return $data;
    }
}
