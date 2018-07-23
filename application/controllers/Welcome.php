<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){
		if(isset($_POST['login'])){
			$user = $this->input->post('user', true); 
			$pass = $this->input->post('pass', true);
			$cek = $this->user_model->proseslogin($user, $pass);
			$hasil = count($cek);
			if($hasil > 0){
				$pelogin = $this->db->get_where('user', array('username' => $user, 'password' => $pass))->row();
				redirect('home');
			}else {
				redirect('');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
