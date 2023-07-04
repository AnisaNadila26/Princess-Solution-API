<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'               => 'INT',
				'constraint'         => 11,
				'auto_increment'     => true,
			],
			'username'                   => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'password'                    => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'nama'              => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'role'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('admin');
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}