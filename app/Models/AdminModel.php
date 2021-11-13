<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['status', 'fullname', 'address', 'dob', 'contact', 'foto_diri', 'foto_ktp', 'email', 'password_hash'];
}
