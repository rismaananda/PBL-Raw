<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model
{
  protected $primaryKey = 'id_login';
  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  public function getUser($username, $password)
  {
    return $this->db->table('tbl_user')
      ->where([
        'username' => $username,
        'password' => $password
      ])->get()->getRowArray();
  }
}
