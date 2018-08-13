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
        $this->load->model('Divisi_model');
        $this->load->model('Admin_model');
    }

    function index(){
      $id_user = $this->session->userdata('id_user');
      $id_divisi = $this->session->userdata('id_divisi');

      $by_kantor = $this->input->post('pilih_cabang');
      $triwulan = $this->input->post('pilih_triwulan');
      $data['by_kantor'] = $by_kantor;
      $data['triwulan'] = $triwulan;

      $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
      foreach ($kantor as $k) {
        $id_kantor = $k['id_kantor'];
      }
      $data['user'] = $this->Admin_model->get_admin($id_user);
      if($by_kantor == 0){
        $data['penggunaan'] = $this->Penggunaan_model->get_all_penggunaan();
      }
      else{
        $data['penggunaan'] = $this->Penggunaan_model->get_penggunaan_by_kantor($by_kantor);
      }
      $data['penggunaan2'] = $this->Penggunaan_model->get_penggunaan_by_kantor($id_kantor);
      $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
      $data['all_divisi'] = $this->Divisi_model->get_all_divisi();

      $data['_view'] = 'penggunaan/index';
      $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/penggunaan/index', $data);
      $this->load->view('templates/dashboard/footer');
    }
    
}
