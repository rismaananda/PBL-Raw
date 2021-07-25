<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProfileModel;
use CodeIgniter\HTTP\Request;

class Profile extends BaseController
{
    protected $profileModel;
    protected $userModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Profile|APBPA',
            'profile' => $this->profileModel->profile(),
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/profile');
        echo view('layout/footer');
    }
    public function edit()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'id_login' => $this->request->getVar('id_login'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email')

        ];
        $this->profileModel->save($data);


        $userData = [
            'id_login' => $this->request->getVar('id_login'),
            'id_user' => $this->request->getVar('id_user'),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_user' => $this->request->getVar('alamat_user'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'link_vendor' => $this->request->getVar('link_vendor')
        ];
        $this->userModel->save($userData);

        return redirect()->to('/profile');
    }
}
