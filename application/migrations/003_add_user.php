<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'nipp' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                        'jabatan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => '1',
                        ),

                ));
                $this->dbforge->add_key('id_user', TRUE);
                $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}