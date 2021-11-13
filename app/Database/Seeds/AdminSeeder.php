<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AdminSeeder extends Seeder
{
	public function run()
	{
        $data = [
            [
                'id_role'  => 1,
                'status'  => 'active',
                'fullname'  => 'Tatang Sutarman',
                'address'  => 'Jl. Tole Iskandar No.10, RT.01/RW.06, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412',
                'dob'  => new Time('now', 'Asia/Jakarta', 'en_US'),
                'contact'  => '082245512312',
                'foto_diri'  => '',
                'foto_ktp'  => '',
                'email'  => 'admin@gmail.com',
                'password'  => password_hash('123456', PASSWORD_DEFAULT),
                'created_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
                'updated_at'  =>  new Time('now', 'Asia/Jakarta', 'en_US'),
            ]
        ];
        $this->db->table('admin')->insertBatch($data);
    }
}
