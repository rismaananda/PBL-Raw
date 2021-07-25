<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{
    protected $table      = 'tbl_favorite';
    protected $primaryKey = 'id_fav';
    protected $allowedFields = ['id_fav', 'id_user_fav', 'id_product'];


    public function getfavorite()
    {
        return $this->db->table('tbl_favorite')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_favorite.id_user_fav')
            ->join('tbl_user', 'tbl_user.id_login=tbl_data_user.id_login')
            ->join('tbl_product', 'tbl_product.id=tbl_favorite.id_product')
            ->where('username', session()->get('username'))
            ->get()->getResultArray();
    }
}
