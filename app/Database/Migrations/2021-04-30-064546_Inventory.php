<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventory extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'status' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'nama_barang' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'Supperman Tshirt',
			],
			'warna' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'Hitam',
			],
			'modal' => [
				'type' => 'FLOAT',
				'constraint' => 5,
				'default' => 10000
			],
			'harga' => [
				'type' => 'FLOAT',
				'constraint' => 5,
				'default' => 15000
			],
			's' => [
				'type' => 'INT',
				'constraint' => 5,
				'default' => 11
			],
			'm' => [
				'type' => 'INT',
				'constraint' => 5,
				'default' => 10
			],
			'l' => [
				'type' => 'INT',
				'constraint' => 5,
				'default' => 3
			],
			'xl' => [
				'type' => 'INT',
				'constraint' => 5,
				'default' => 5
			],
            'gambar' => [
                'type'=>'TEXT',
            ],
			'created_at' => [
				'type'           => 'DATETIME',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			]
		]);

//		Membuat Primary Key
		$this->forge->addKey('id', true);

//       Membuat Table News
		$this->forge->createTable('inventory', true);
	}

    public function down()
    {
//	    Drop Table
        $this->forge->dropTable('inventory');
    }
}
