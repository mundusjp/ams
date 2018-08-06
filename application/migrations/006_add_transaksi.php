<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_transaksi extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_transaksi' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE,
                        ),
                        'id_vendor' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'tanggal_transaksi' => array(
                                'type' => 'DATE',
                        ),
                        'periode_start' => array(
                                'type' => 'DATE',
                                'null' => TRUE,
                        ),
                        'tanggal_end' => array(
                                'type' => 'DATE',
                                'null' => TRUE,
                        ),
                        'biaya' => array(
                            'type' => 'INT',
                            'constraint' => '20',
                        ),
                        'deskripsi' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '191',
                            'null' => TRUE,
                        ),
                        'jenis_transaksi' => array(
                                'type' => 'ENUM("beli", "sewa")',
                                'default' => 'beli',
                                'null' => FALSE,
                        ),
                        'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
                        'updated_at' => array(
                                'type' => 'TIMESTAMP',
                                'on update' => 'NOW()',
                                'null' => FALSE,
                        ),

                ));
                $this->dbforge->add_key('id_transaksi', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_vendor) REFERENCES vendor(id_vendor)');
                $this->dbforge->create_table('transaksi');
        }

        public function down()
        {
                $this->dbforge->drop_table('transaksi');
        }
}