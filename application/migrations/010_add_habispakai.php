<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_habispakai extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'jumlah' => array(
                            'type' => 'INT',
                            'constraint' => 10,
                        ),
                        'satuan' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '10',
                        ),
                ));
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->create_table('habispakai');
        }

        public function down()
        {
                $this->dbforge->drop_table('habispakai');
        }
}