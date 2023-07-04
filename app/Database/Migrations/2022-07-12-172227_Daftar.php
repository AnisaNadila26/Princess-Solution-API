<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
	public function up()
	{
		//list field
		$this->forge->addField([
			'no_registrasi'          => [
				'type'               => 'INT',
				'constraint'         => 11,
				'auto_increment'     => true,
			],
			'nama'                   => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'ttl'                    => [
				'type'               => 'DATE',
				'null'               => true
			],
			'pekerjaan'              => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'alamat'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'telpon'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'jenis_kendaraan'        => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'kode_kendaraan'         => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'instruktur'             => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
            'paket'                  => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
            'jadwal'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
            'status'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'pembayaran'             => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'harga'             	 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'anTransfer'             => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
			'buktiTF'                 => [
				'type'               => 'VARCHAR',
				'constraint'         => '255',
			],
            'kehadiran'              => [
				'type'               => 'INT',
				'constraint'         => '11',
			],
			'created_at'             => [
				'type'               => 'DATETIME',
				'null'               => true
			],
			'updated_at'             => [
				'type'               => 'DATETIME',
				'null'               => true
			],
		]);
		//primary key
		$this->forge->addKey('no_registrasi', true);
		//nama tabel
		$this->forge->createTable('daftar');
	}

	public function down()
	{
		$this->forge->dropTable('daftar');
	}
}
