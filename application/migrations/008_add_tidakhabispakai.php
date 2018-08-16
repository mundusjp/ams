<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tidakhabispakai extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_inventory' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'serial_id' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                            'unique' => TRUE,
                            'null' => FALSE,
                        ),
                        'kondisi' => array(
                            'type' => 'ENUM("baik", "sedang", "buruk")',
                            'default' => 'baik',
                            'null' => FALSE,
                        ),
                        'durability' => array(
                            'type' => 'INT',
                            'constraint' => '10',
                            'null' => TRUE,
                        ),
                        'status' => array(
                            'type' => 'ENUM("ada", "dijual", "dibuang", "dikembalikan")',
                            'default' => 'ada',
                            'null' => FALSE,
                        ),
                        'updated_at' => array(
                            'type' => 'TIMESTAMP',
                            'on update' => 'NOW()',
                            'null' => FALSE,
                        ),
                ));
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_inventory) REFERENCES inventory(id_inventory)');
                $this->dbforge->create_table('tidakhabispakai');
        }

        public function down()
        {
                $this->dbforge->drop_table('tidakhabispakai');
        }
}