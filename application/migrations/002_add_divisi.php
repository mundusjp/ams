<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_divisi extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_divisi' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'gedung' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'lantai' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                        ),
                        'id_kantor' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id_divisi', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_kantor) REFERENCES kantor(id_kantor)');
                $this->dbforge->create_table('divisi');
        }

        public function down()
        {
                $this->dbforge->drop_table('divisi');
        }
}