<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
	public function __construct()
	{
		$this->ProductModel = new ProductModel();
	}
	public function index()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('Failed', 'Anda Belum Login');
			return redirect()->to('/login');
		}

		$data = [
			'title' => 'Home | APBPA',
			'barang' => $this->ProductModel->paginate(8)
		];

		//dd($this->ProductModel->getAllProduct());
		echo view('layout/header', $data);
		echo view('Pages/home', $data);
		echo view('layout/footer', $data);
	}
}
