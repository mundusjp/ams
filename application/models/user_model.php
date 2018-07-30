<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	function proseslogin($table,$where){
		return $this->db->get_where($table,$where);
	}
}
