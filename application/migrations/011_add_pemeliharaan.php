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
                            'auto_increment' => TRUE,
                        ),
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'biaya' => array(
                            'type' => 'INT',
                            'constraint' => '20',
                            'null' => FALSE,
                        ),
                        'tanggal' => array(
                            'type' => 'DATE',
                            'null' => FALSE,
                        ),
                        'deskripsi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '191',
                            'null' => TRUE,
                        ),
                        'id_vendor' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_pemeliharaan', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_vendor) REFERENCES vendor(id_vendor)');
                $this->dbforge->create_table('pemeliharaan');
        }

        public function down()
        {
                $this->dbforge->drop_table('pemeliharaan');
        }
}