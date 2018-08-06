<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_vendor extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_vendor' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'alamat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '191',
                                'null' => FALSE,
                        ),
                        'no_hp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '13',
                                'null' => FALSE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                ));
                $this->dbforge->add_key('id_vendor', TRUE);
                $this->dbforge->create_table('vendor');
        }

        public function down()
        {
                $this->dbforge->drop_table('vendor');
        }
}