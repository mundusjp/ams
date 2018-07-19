<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_kantor extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_kantor' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'alamat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '191',
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => '1',
                        ),
                ));
                $this->dbforge->add_key('id_kantor', TRUE);
                $this->dbforge->create_table('kantor');
        }

        public function down()
        {
                $this->dbforge->drop_table('kantor');
        }
}