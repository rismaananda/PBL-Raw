<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Vendor extends BaseController
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
        session();
        $data = [
            'title' => 'Vendor | APBPA',
            'vendor' => $this->productModel->vendor(),
            'validation' => \Config\Services::validation()

        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/Vendor');
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
        session();
        $data = [
            'title' => 'Detail Product Vendor | APBPA',
            'product' => $product,
            'validation' => \Config\Services::validation()
        ];

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product gaada bro');
        }
        echo view('layout/header', $data);
        echo view('pages/detail_vendor');
        echo view('layout/footer');
    }
    public function save()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }

        //validasi input
        if (!$this->validate([
            'input_gambar' => [
                'rules' => 'max_size[input_gambar,1024]|is_image[input_gambar]|mime_in[input_gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_2' => [
                'rules' => 'max_size[input_gambar_2,1024]|is_image[input_gambar_2]|mime_in[input_gambar_2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_3' => [
                'rules' => 'max_size[input_gambar_3,1024]|is_image[input_gambar_3]|mime_in[input_gambar_3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_4' => [
                'rules' => 'max_size[input_gambar_4,1024]|is_image[input_gambar_4]|mime_in[input_gambar_4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ]
        ])) {
            return redirect()->to('/vendor')->withInput();
        }
        //ambil gambar
        $fileGambar = $this->request->getFile('input_gambar');
        $fileGambar2 = $this->request->getFile('input_gambar_2');
        $fileGambar3 = $this->request->getFile('input_gambar_3');
        $fileGambar4 = $this->request->getFile('input_gambar_4');
        // generate nama gambar random
        $namaGambar = $fileGambar->getRandomName();
        $namaGambar2 = $fileGambar2->getRandomName();
        $namaGambar3 = $fileGambar3->getRandomName();
        $namaGambar4 = $fileGambar4->getRandomName();
        //pindah file ke folder images
        $fileGambar->move('assets/images', $namaGambar);
        $fileGambar2->move('assets/images', $namaGambar2);
        $fileGambar3->move('assets/images', $namaGambar3);
        $fileGambar4->move('assets/images', $namaGambar4);
        // ambil nama file
        $namaGambar = $fileGambar->getName();
        $namaGambar2 = $fileGambar2->getName();
        $namaGambar3 = $fileGambar3->getName();
        $namaGambar4 = $fileGambar4->getName();
        /*dd($this->request->getVar());*/
        $this->productModel->save([
            'id_user' => $this->request->getVar('id_user'),
            'nama_product' => $this->request->getVar('nama_product'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'input_gambar' => $namaGambar,
            'input_gambar_2' => $namaGambar2,
            'input_gambar_3' => $namaGambar3,
            'input_gambar_4' => $namaGambar4,
        ]);
        return redirect()->to('/vendor');
    }

    public function delete($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        // cari gambar berdasarkan id
        $product = $this->productModel->find($id);

        // hapus sekalian gambar
        unlink('assets/images/' . $product['input_gambar']);
        unlink('assets/images/' . $product['input_gambar_2']);
        unlink('assets/images/' . $product['input_gambar_3']);
        unlink('assets/images/' . $product['input_gambar_4']);
        $this->productModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/vendor');
    }
    public function update($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('Failed', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        // rules 
        //validasi input
        if (!$this->validate([
            'input_gambar' => [
                'rules' => 'max_size[input_gambar,10240]|is_image[input_gambar]|mime_in[input_gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_2' => [
                'rules' => 'max_size[input_gambar_2,10240]|is_image[input_gambar_2]|mime_in[input_gambar_2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_3' => [
                'rules' => 'max_size[input_gambar_3,10240]|is_image[input_gambar_3]|mime_in[input_gambar_3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],
            'input_gambar_4' => [
                'rules' => 'max_size[input_gambar_4,10240]|is_image[input_gambar_4]|mime_in[input_gambar_4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size' => 'Ukuran max 1mb',
                    'is_image' => 'Bukan Gambar',
                    'mime_in' => ' Bukan Gambar'
                ]
            ],

        ])) {
            return redirect()->to('/vendor')->withInput();
        }


        //ambil gambar
        $fileGambar = $this->request->getFile('input_gambar');
        $fileGambar2 = $this->request->getFile('input_gambar_2');
        $fileGambar3 = $this->request->getFile('input_gambar_3');
        $fileGambar4 = $this->request->getFile('input_gambar_4');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('input_gambarLama');
        } else {
            // generate name
            $namaGambar = $fileGambar->getRandomName();
            // pindah gambar
            $fileGambar->move('assets/images', $namaGambar);
            //hapus file lama
            unlink('assets/images/' . $this->request->getVar('input_gambarLama'));
        }
        if ($fileGambar2->getError() == 4) {
            $namaGambar2 = $this->request->getVar('input_gambar2Lama');
        } else {
            // generate name
            $namaGambar2 = $fileGambar2->getRandomName();
            // pindah gambar
            $fileGambar2->move('assets/images', $namaGambar2);
            //hapus file lama
            unlink('assets/images/' . $this->request->getVar('input_gambar2Lama'));
        }
        if ($fileGambar3->getError() == 4) {
            $namaGambar3 = $this->request->getVar('input_gambar3Lama');
        } else {
            // generate name
            $namaGambar3 = $fileGambar3->getRandomName();
            // pindah gambar
            $fileGambar3->move('assets/images', $namaGambar3);
            //hapus file lama
            unlink('assets/images/' . $this->request->getVar('input_gambar3Lama'));
        }
        if ($fileGambar4->getError() == 4) {
            $namaGambar4 = $this->request->getVar('input_gambar4Lama');
        } else {
            // generate name
            $namaGambar4 = $fileGambar4->getRandomName();
            // pindah gambar
            $fileGambar4->move('assets/images', $namaGambar4);
            //hapus file lama
            unlink('assets/images/' . $this->request->getVar('input_gambar4Lama'));
        }
        $this->productModel->save([
            'id' => $id,
            'id_user' => $this->request->getVar('id_user'),
            'nama_product' => $this->request->getVar('nama_product'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'input_gambar' => $namaGambar,
            'input_gambar_2' => $namaGambar2,
            'input_gambar_3' => $namaGambar3,
            'input_gambar_4' => $namaGambar4,
        ]);

        return redirect()->to('/vendor');
    }
}
