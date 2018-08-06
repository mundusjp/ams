<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_penggunaan extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_penggunaan' => array(
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
                        'triwulan' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '30',
                            'null' => FALSE,
                        ),
                        'tahun' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'null' => FALSE,
                        ),
                        'jumlah_penggunaan' => array(
                            'type' => 'INT',
                            'constraint' => 10,
                            'unsigned' => TRUE,
                            'null' => FALSE,
                        ),
                ));
                $this->dbforge->add_key('id_penggunaan', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->create_table('penggunaan');
        }

        public function down()
        {
                $this->dbforge->drop_table('penggunaan');
        }
}