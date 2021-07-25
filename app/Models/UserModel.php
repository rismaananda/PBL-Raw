<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tbl_data_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'id_login', 'nama', 'tanggal_lahir', 'alamat_user', 'no_hp', 'link_vendor'];


    public function profile()
    {
        return $this->db->table('tbl_data_user')
            ->join('tbl_user', 'tbl_user.id_login=tbl_data_user.id_login', 'right')
            ->where('id_login', session()->get('id_login'))
            ->get()->getRowArray();
    }
}
