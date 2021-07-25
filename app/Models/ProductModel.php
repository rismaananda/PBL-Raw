<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'tbl_product';
    protected $allowedFields = ['id_user', 'nama_product', 'harga', 'berat', 'alamat', 'deskripsi', 'input_gambar', 'input_gambar_2', 'input_gambar_3', 'input_gambar_4'];

    public function getProduct()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')
            ->get()->getResultArray();
    }
    public function search($keyword)
    {
        // $builder = $this->table('tbl_product');
        // $builder->like('nama_product', $keyword);
        // return $builder;
        return $this->table('tbl_product')->like('nama_product', $keyword);
    }
    public function vendor()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user', 'right')
            ->join('tbl_user', 'tbl_user.id_login=tbl_data_user.id_login')
            ->where('username', session()->get('username'))
            ->get()->getResultArray();
    }
    public function edit_data($data, $id)
    {
        return $this->db->table('tbl_barang')->update($data, array('id' => $id));
    }
}
