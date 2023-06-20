<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step2 membuat sebuah property

    protected $film;

    //step 3 membuat fungsi construct untuk insasi clas model
    public function __construct()
    {
        //step 4 memanggil properti film
        $this->film = new FilmModel();
    }

    public function index()
    {
       // dd($this->film->getFilm());
       $data['data_film'] = $this->film->getAllDataJoin();
       return view("film/index", $data);
    }

    public function all()
    {
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
    }

    public function film_by_id()
    {
        dd($this->film->getdataByID(1));
    }
    public function film_by_genre()
    {
        dd($this->film->getDataBy('horror'));
    }

    public function film_order()
    {
        dd($this->film->getOrderBy());
    }

    public function film_Limit_five()
    {
        dd($this->film->getLimit());
    }
}