<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Admin extends Model
{
    //fungsi counting
    public function countUser()
    {
        return $this->db->table('tbl_user')->countAll();
    }
    public function countSupp()
    {
        return $this->db->table('tbl_data_user')->countAll();
    }
    public function countBrg()
    {
        return $this->db->table('tbl_product')->countAll();
    }
    public function countFeed()
    {
        return $this->db->table('tbl_feedback')->countAll();
    }

    //fungsi get data
    public function getUser()
    {
        return $this->db->table('tbl_user')->get()->getResultArray();
    }
    public function getSupp()
    {
        return $this->db->table('tbl_data_user')->get()->getResultArray();
    }
    public function getProduct()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')
            ->get()->getResultArray();
    }
    public function getFeedback()
    {
        return $this->db->table('tbl_feedback')->get()->getResultArray();
    }

    //fungsi delete data
    public function deleteUser($id)
    {
        return $this->db->table('tbl_user')->delete(['id_login' => $id]);
    }
    public function deleteSupp($id)
    {
        return $this->db->table('tbl_data_user')->delete(['id_user' => $id]);
    }
    public function deleteProduct($id)
    {
        return $this->db->table('tbl_product')->delete(['id' => $id]);
    }
    public function deleteFeedback($id)
    {
        return $this->db->table('tbl_feedback')->delete(['id_fb' => $id]);
    }
}
