<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function proseslogin($user, $pass)
	{
				$pelogin = $this->db->get_where('user', array('username' => $user, 'password' => $pass));

				if($pelogin->num_rows()>0){
					return 1;
				}
				else{
					return 0;
				}
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        return $this->db->get('user')->row();
	}
}
