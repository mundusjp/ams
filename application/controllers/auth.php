<?php
class auth extends CI_Controller{

  function __contruct(){
    parent::__contruct();
    $this->load->model('user_model');
  }

  public function login(){
		if(isset($_POST['login'])){
			$user = $this->input->post('user', true);
			$pass = $this->input->post('pass', true);
			$hasil = $this->user_model->proseslogin($user, $pass);
			if($hasil ==1){
        $this->session->set_userdata(array('status_login'=>'sukses'));
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
