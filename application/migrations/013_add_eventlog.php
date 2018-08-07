<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_eventlog extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_event' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE,
                        ),
                        'id_user' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                        ),
                        'event' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => FALSE,
                        ),
                        'ref_id' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'null' => FALSE,
                        ),
                        'eventDesc' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 191,
                            'null' => TRUE,
                        ),
                        'eventTable' => array(
                            'type' => 'VARCHAR',
                            'constraint' => 50,
                            'null' => FALSE,
                        ),
                        'eventTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
                ));
                $this->dbforge->add_key('id_event', TRUE);
                $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (id_user) REFERENCES user(id_user)');
                $this->dbforge->create_table('eventlog');
        }

        public function down()
        {
                $this->dbforge->drop_table('eventlog');
        }
}