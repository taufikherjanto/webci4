<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'test' => [1, 2, 4, 5]
        ];

        //echo view('pages/home', $data);
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Taufik',
            'test' => [1, 2, 4, 5]
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Kab. Sleman',
                    'kota' => 'Yogyakarta'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Duren Sawit',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
