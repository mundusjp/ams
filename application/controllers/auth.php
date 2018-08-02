<?php

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	function index(){
		$this->load->view('');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->user_model->proseslogin("user",$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $login){
				$data_session = array(
					'username' => $username,
					'level' => $login->status,
					'nama' => $login->nama,
					'id_user' => $login->id_user,
					'nipp' => $login->nipp,
					'id_divisi' => $login->id_divisi,
					'photo' => $login->photo,
					'status' => "login",
					);

				$this->session->set_userdata($data_session);

				redirect('home');
			}
		}
		else{
      $this->load->view('loginfailed');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
