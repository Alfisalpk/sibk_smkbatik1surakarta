<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResetPasswordTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'expires' => [
                'type' => 'DATETIME',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('reset_password_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('reset_password_tokens');
    }
}
