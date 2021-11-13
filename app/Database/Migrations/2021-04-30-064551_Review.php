<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
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
			'nama_pengirim' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'Tatang Sutarman',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'tatang@gmail.com',
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'Compliment Letter',
			],
			'message' => [
				'type' => 'TEXT',
				'default' => 'website nya bagus kak',
			],
            'rating' => [
                'type' => 'INT',
                'constraint' => 5,
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
		$this->forge->createTable('review', true);
	}

	public function down()
	{
		$this->forge->dropTable('review');
	}
}
