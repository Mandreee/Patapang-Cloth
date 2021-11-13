<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class InventorySeeder extends Seeder
{
	public function run()
	{
        $data = [
            [
                'status'  => 'active',
                'nama_barang'  => 'Supper Tshirt',
                'warna'  => 'Hitam',
                'modal'  => 20000,
                'harga'  => 20000,
                's'  => 5,
                'm'  => 5,
                'l'  => 5,
                'xl'  => 5,
                'created_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
                'updated_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
            ]
        ];
        $this->db->table('inventory')->insertBatch($data);
    }
}
