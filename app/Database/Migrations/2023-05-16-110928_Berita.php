<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'judul'                  => [
                'type'               => 'LONGTEXT',
            ],
            'image'                  => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'tanggal'                => [
                'type'               => 'DATE',
                'null'               => true
            ],
            'isi'                    => [
                'type'               => 'LONGTEXT',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('berita');
    }

    public function down()
    {
        $this->forge->dropTable('berita');
    }
}
