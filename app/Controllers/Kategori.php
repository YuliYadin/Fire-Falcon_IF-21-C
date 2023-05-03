<?php

namespace App\Controllers;

use App\Models\Model_Kategori;

class Kategori extends BaseController
{
    protected $Model_Kategori;

    public function __construct()
    {
        $this->Model_Kategori = new Model_Kategori();
    }
    public function index()
    {
        $data =  array(
            'title' => 'Kategori',
            'Kategori' => $this->Model_Kategori->all_data(),
            'isi' => 'v_kategori'
        );
        return view('layout/v_wrapper', $data);
    }
}
