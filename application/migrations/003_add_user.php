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
                                'unique' => TRUE,
                                'null' => FALSE,
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'nipp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE,
                        ),
                        'jabatan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => '1',
                                'null' => FALSE,
                        ),
                        'id_divisi' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),
                        'no_hp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 13,
                                'unsigned' => TRUE,
                                'null' => TRUE,
                        ),
                        'alamat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 191,
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 191,
                                'null' => TRUE,
                        ),
                        'photo' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 191,
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_user', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_divisi) REFERENCES divisi(id_divisi)');
                $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}