<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Contact extends BaseController
{
    protected $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $contact = $this->contactModel->find();
        $data = [
            'title' => 'Contact | APBPA',
            'contact' => $contact
        ];
        echo view('layout/header', $data);
        echo view('Pages/contact');
        echo view('layout/footer');
    }
    public function save()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        /*dd($this->request->getVar());*/
        $this->contactModel->save([
            'nama_fb' => $this->request->getVar('nama_fb'),
            'subjek_fb' => $this->request->getVar('subjek_fb'),
            'email_fb' => $this->request->getVar('email_fb'),
            'nomor_fb' => $this->request->getVar('nomor_fb'),
            'pesan_fb' => $this->request->getVar('pesan_fb'),
        ]);
        echo "<script>";
        echo " alert('Berhasil / Terimakasih telah menghubungi kami ?!');      
            window.location.href='" . site_url('/contact') . "';
            </script>";
    }
}
