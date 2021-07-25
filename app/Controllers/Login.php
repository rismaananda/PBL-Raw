<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Login;

class Login extends BaseController
{
	public function __construct()
	{
		$this->M_Login = new M_Login();
	}

	public function index()
	{
		echo view('pages/login');
	}

	public function cek_login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$cek = $this->M_Login->getUser($username, $password);

		if (($cek['username'] == $username) && ($cek['password'] == $password)) {
			// echo "oke";
			if ($username == 'admin') {
				session()->set('username', $cek['username']);
				return redirect()->to('/admin');
			} else {
				session()->set('id_login', $cek['id_login']);
				session()->set('username', $cek['username']);
				session()->set('password', $cek['password']);
				session()->set('email', $cek['email']);
				return redirect()->to('/home');
			}
		} else {
			echo "<script>";
			echo " alert('Username / Password Anda Salah ?!');      
            window.location.href='" . site_url('/login') . "';
            </script>";
		}
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
