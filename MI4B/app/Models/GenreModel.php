<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';   // Nama table yang ada di database
    protected $primaryKey       = 'id';     // Nama kolom yang menjadi primary key
    protected $useAutoIncrement = true;     // Beri nilai true jika terdapat autoincrement
    protected $allowFields      = [];       // Digunakan untuk menentukan kolom mana saja yang dapat kita insert data



   public function getGenre()
   {

    $data =[
        [
            "name_genre" => "action",
            "create_at" => "",
            "updatee_at" => "",
        ],
        [ 
            "name_genre" => "action",
            "create_at" => "",
            "updatee_at" => "",
        ]
        ];

    return $data;
   }
   public function getAllDdata()
   {
    return $this->findAll();
   }
   public function getDataByID($id)
   {
       return $this->find($id);
   }
   public function getDataBy($data)
   {
       return $this->where('genre', $data)->findAll();
   }

   public function getOrderBy()
   {
       return $this->orderBy('create_at', 'desc')->findAll();
   }

   public function getLimit()
   {
       return $this->Limit(5)->findAll();
   }
}