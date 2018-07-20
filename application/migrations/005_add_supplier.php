<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_supplier extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_supplier' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'alamat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '191',
                        ),
                ));
                $this->dbforge->add_key('id_supplier', TRUE);
                $this->dbforge->create_table('supplier');
        }

        public function down()
        {
                $this->dbforge->drop_table('supplier');
        }
}