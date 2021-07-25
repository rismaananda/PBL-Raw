<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table      = 'tbl_user';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['id_login', 'username', 'password', 'email'];


    public function profile()
    {
        return $this->db->table('tbl_data_user')
            ->join('tbl_user', 'tbl_user.id_login=tbl_data_user.id_login', 'right')
            ->where('username', session()->get('username'))
            ->get()->getRowArray();
    }
}
