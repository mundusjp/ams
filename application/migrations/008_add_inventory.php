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
                        ),
                        'jenis' => array(
                            'type' => 'INT',
                            'constraint' => '1',
                        ),
                        'merk' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                        ),
                        'nama_divisi_pengada' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                        ),
                        'id_divisi_pengada' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'tanggal' => array(
                            'type' => 'TIMESTAMP',
                        ),
                        'kategori' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 10,
                        ),
                        'id_beli/sewa' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_inventory', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_divisi_pengada) REFERENCES divisi(id_divisi)');
                $this->dbforge->create_table('inventory');
        }

        public function down()
        {
                $this->dbforge->drop_table('inventory');
        }
}