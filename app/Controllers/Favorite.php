<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Favorite extends BaseController
{
    protected $favoriteModel;
    public function __construct()
    {
        $this->favoriteModel = new FavoriteModel();
    }
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $model = new FavoriteModel();
        $data = [
            'title' => 'favorit | APBPA',
            'favorite' => $model->getfavorite()
        ];
        echo view('layout/header', $data);
        echo view('Pages/favorite');
        echo view('layout/footer');
    }
    public function favorite()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $this->favoriteModel->save([
            'id_product' => $this->request->getVar('id_product'),
            'id_user_fav' => $this->request->getVar('id_user_fav')
        ]);
        return redirect()->to('/favorite');
    }
    public function delete($id_fav)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $this->favoriteModel->delete($id_fav);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/favorite');
    }
}
