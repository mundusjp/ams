<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_kebutuhan extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_kebutuhan' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'nama_barang' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'jumlah' => array(
                                'type' => 'INT',
                                'constraint' => '20',
                                'null' => FALSE,
                        ),
                        'id_divisi' => array(
                                'type' => 'INT',
                                'constraint' => '5',
                                'unsigned' => TRUE,
                        ),
                        'id_user' => array(
                            'type' => 'INT',
                            'constraint' => '5',
                            'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_kebutuhan', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_divisi) REFERENCES divisi(id_divisi)');
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_user) REFERENCES user(id_user)');
                $this->dbforge->create_table('kebutuhan');
        }

        public function down()
        {
                $this->dbforge->drop_table('kebutuhan');
        }
}