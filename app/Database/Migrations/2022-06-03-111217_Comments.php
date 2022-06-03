<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comments extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],

            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null'       => false,
            ],

            'comment'       => [
                'type'       => 'TEXT',
                'null'       => false,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);
        // ForeignKey
        $this->forge->addKey('id', true);
        $this->forge->createTable('comments');
    }

    public function down()
    {
        $this->forge->dropTable('comments');
    }
}