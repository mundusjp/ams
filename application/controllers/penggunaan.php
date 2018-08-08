<?php
class Penggunaan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('Penggunaan_model');
        $this->load->model('Inventory_model');
        $this->load->model('Kantor_model');
    }

    function index(){
      $data['penggunaan'] = $this->Penggunaan_model->get_all_penggunaan();
      $data['all_kantor'] = $this->Kantor_model->get_all_kantor();

      $data['_view'] = 'penggunaan/index';
      $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/penggunaan/index', $data);
      $this->load->view('templates/dashboard/footer');
    }
}
