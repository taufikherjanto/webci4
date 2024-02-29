<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table      = 'komik';
    // default pk
    // protected $primaryKey = 'id';
    protected $useTimestamps = true;

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            // bila slug kosong, get semua komik
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
