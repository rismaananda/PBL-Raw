<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Registrasi;

class Register extends BaseController
{
	public function __construct()
	{
		$this->M_Registrasi = new M_Registrasi();
	}

	public function index()
	{
		echo view('pages/signup');
	}

	public function register()
	{
		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'email' => $this->request->getVar('email')
		];

		$this->M_Registrasi->tambahuser($data);
		return redirect()->to('/login');
	}
}
