<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Registrasi extends Model
{

  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  public function tambahuser($data)
  {
    $builder = $this->db->table('tbl_user');
    $builder->insert($data);
  }
}
