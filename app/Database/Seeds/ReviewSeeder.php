<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ReviewSeeder extends Seeder
{
	public function run()
	{
        $data = [
            [
                'status'  => 'active',
                'nama_pengirim'  => 'Tatang Sutarman',
                'email'  => 'admin@gmail.com',
                'title'  => 'Compliment Letter',
                'message'  => 'Baju nya bagus kak',
                'rating'  => 25,
                'created_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
                'updated_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
            ]
        ];
        $this->db->table('review')->insertBatch($data);
    }
}
