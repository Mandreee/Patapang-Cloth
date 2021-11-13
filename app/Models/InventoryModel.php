<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = "inventory";
    protected $primaryKey = "id";
    protected $returnType = "App\Entities\InventoryImage";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'status', 'nama_barang', 'warna', 'modal', 'harga', 's', 'm', 'l', 'xl', 'gambar'];
}
