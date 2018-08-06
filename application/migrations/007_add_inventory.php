<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_inventory extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE,
                        ),
                        'nama' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                            'null' => FALSE,
                        ),
                        'jenis' => array(
                            'type' => 'INT',
                            'constraint' => '1',
                            'null' => FALSE,    
                        ),
                        'merk' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => FALSE,
                        ),
                        'nama_divisi_pengada' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => FALSE,
                        ),
                        'id_divisi_penerima' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'tanggal TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
                        'kategori' => array(
                            'type' => 'ENUM("beli", "sewa")',
                            'default' => 'beli',
                            'null' => FALSE,
                        ),
                        'id_transaksi' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'harga' => array(
                            'type' => 'INT',
                            'constraint' => '10',
                            'null' => FALSE,    
                        ),
                ));
                $this->dbforge->add_key('id_inventory', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_divisi_penerima) REFERENCES divisi(id_divisi)');
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi)');
                $this->dbforge->create_table('inventory');
        }

        public function down()
        {
                $this->dbforge->drop_table('inventory');
        }
}