<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Product extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $product = $this->productModel->search($keyword);
        } else {
            $product = $this->productModel;
        }
        // $product = $this->productModel->getProduct();

        $data = [
            'title' => 'Product | APBPA',
            'product' => $product->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')->paginate(8, 'product'),
            'pager' => $this->productModel->pager
        ];
        // $productModel = new ProductModel();
        echo view('layout/header', $data);
        echo view('Pages/product');
        echo view('layout/footer');
    }
    public function detail($nama_product)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        $product = $this->productModel
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')
            ->where(['nama_product' => $nama_product])->first();
        $data = [
            'title' => 'Detail Product | APBPA',
            'product' => $product,
        ];

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product gaada bro');
        }
        echo view('layout/header', $data);
        echo view('pages/detail');
        echo view('layout/footer');
    }
}
