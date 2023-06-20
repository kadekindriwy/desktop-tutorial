<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table            = 'film';   // Nama table yang ada di database
    protected $primaryKey       = 'id';     // Nama kolom yang menjadi primary key
    protected $useAutoIncrement = true;     // Beri nilai true jika terdapat autoincrement
    protected $allowFields      = [];       // Digunakan untuk menentukan kolom mana saja yang dapat kita insert data



   public function getFilm()
   {

    $data =[
        [
            "nama_film" => "Sewu Dino",
            "id_genre"     => "horor",
            "duration"  => "1 jam 43 menit"
        ],
        [
            "nama_film" => "Dreadout",
            "id_genre"     => "Thriller",
            "duration"  => "1 jam 35 menit"
            
        ],
        [
            "nama_film" => "Fast and Furious",
            "id_genre"     => "horor",
            "duration"  => "2 jam 21 menit"
        ],
        [
            "nama_film" => "suzume",
            "id_genre"     => "fantasi fiksi",
            "duration"  => "2 jam 2 menit"
        ],
        [
            "nama_film" => "kimi no nawa",
            "id_genre"     => "fantasi fiksi",
            "duration"  => "1 jam 52 menit"
        ]
        ];

    return $data;
   }

   public function getAllDataJoin()
   {
   $query = $this ->db->table("film")
   ->select("film.*, genre.nama_genre")
   ->join("genre", "genre.id = film.id_genre");
   return $query->get()->getResultArray();
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