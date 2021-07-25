<?php

namespace App\Controllers;

use App\Models\M_Admin;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->M_Admin = new M_Admin();
    }

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'jml_user' => $this->M_Admin->countUser(),
            'jml_supp' => $this->M_Admin->countSupp(),
            'jml_brg' => $this->M_Admin->countBrg(),
            'jml_feed' => $this->M_Admin->countFeed(),
        ];
        echo view('hal_admin/index', $data);
    }

    //fungsi view
    public function detail_user()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'users' => $this->M_Admin->getUser(),
        ];

        echo view('hal_admin/det_user', $data);
    }
    public function detail_supplier()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'supp' => $this->M_Admin->getSupp(),
        ];

        echo view('hal_admin/det_supp', $data);
    }
    public function detail_produk()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'brg' => $this->M_Admin->getProduct(),
        ];

        echo view('hal_admin/det_prdct', $data);
    }
    public function detail_feedback()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $data = [
            'feed' => $this->M_Admin->getFeedback(),
        ];

        echo view('hal_admin/det_feedback', $data);
    }


    //fungsi delete
    public function delete_user($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $query = $this->M_Admin->deleteUser($id);
        if ($query) {
            return redirect()->to('/admin/detail_user');
        } else {
            return redirect()->to('/admin');
        }
    }
    public function delete_supp($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $query = $this->M_Admin->deleteSupp($id);
        if ($query) {
            return redirect()->to('/admin/detail_supplier');
        } else {
            return redirect()->to('/admin');
        }
    }
    public function delete_produk($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $query = $this->M_Admin->deleteProduct($id);
        if ($query) {
            return redirect()->to('/admin/detail_produk');
        } else {
            return redirect()->to('/admin');
        }
    }
    public function delete_feedback($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $query = $this->M_Admin->deleteFeedback($id);
        if ($query) {
            return redirect()->to('/admin/detail_feedback');
        } else {
            return redirect()->to('/admin');
        }
    }
}
