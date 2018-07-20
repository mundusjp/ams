<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_pemeliharaan extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_pemeliharaan' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'biaya' => array(
                            'type' => 'INT',
                            'constraint' => '20',
                        ),
                        'tanggal' => array(
                            'type' => 'DATE',
                        ),
                        'deskripsi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '191',
                        ),
                ));
                $this->dbforge->add_key('id_pemeliharaan', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->create_table('pemeliharaan');
        }

        public function down()
        {
                $this->dbforge->drop_table('pemeliharaan');
        }
}