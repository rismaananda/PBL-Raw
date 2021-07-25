<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'tbl_feedback';
    protected $primaryKey = 'id_fb';
    protected $allowedFields = ['nama_fb', 'subjek_fb', 'email_fb', 'nomor_fb', 'pesan_fb'];
}
