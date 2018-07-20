<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_beli extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_beli' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE,
                        ),
                        'id_supplier' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'tanggal_transaksi' => array(
                                'type' => 'DATE',
                        ),
                        'total_harga' => array(
                            'type' => 'INT',
                            'constraint' => '10',
                        ),
                        'deskripsi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '191',
                        ),
                ));
                $this->dbforge->add_key('id_beli', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_supplier) REFERENCES supplier(id_supplier)');
                $this->dbforge->create_table('beli');
        }

        public function down()
        {
                $this->dbforge->drop_table('beli');
        }
}