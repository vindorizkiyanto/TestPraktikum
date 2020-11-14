<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Hasil extends BaseController
{

    public function index()
    {

        $model = new ProdukModel();
        $data['data'] = $model->getProduk();

        echo view('Produk/index', $data);
    }
}