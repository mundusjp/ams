<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_penjualan extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_penjualan' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'pembeli' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                        ),
                        'harga' => array(
                            'type' => 'INT',
                            'constraint' => '20',
                        ),
                        'tanggal' => array(
                            'type' => 'DATE',
                        ),
                ));
                $this->dbforge->add_key('id_penjualan', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->create_table('penjualan');
        }

        public function down()
        {
                $this->dbforge->drop_table('penjualan');
        }
}