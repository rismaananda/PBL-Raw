<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class About extends BaseController
{
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'About|APBPA'
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/about');
        echo view('layout/footer');
    }
}
