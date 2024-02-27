<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        // $komikModel = new \App\Models\KomikModel();
        $this->komikModel = new KomikModel();
    }

    public function index(): string
    {
        /*
         * cara koneksi database tanpa menggunakan model

        $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");
        foreach ($komik->getResultArray() as $row) {
            d($row);
        }
        *
        */

        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'List Komik',
            'komik' => $komik
        ];

        return view('komik/index', $data);
    }
}
