<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([

            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],

            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null'       => false,
            ],

            'description'       => [
                'type'       => 'TEXT',
                'null'       => true,
            ],

            'price'       => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null'       => false,
            ],

            'url_img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],

            'is_visible'       => [
                'type'       => 'BOOLEAN',
                'null'       => false,
            ],

            'id_category'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'null'           => true,
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
        $this->forge->addForeignKey('id_category', 'categories', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}