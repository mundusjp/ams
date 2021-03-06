<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Getstarted extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('');
          }
          $this->load->model('Divisi_model');
          $this->load->model('admin_model');
          $this->load->model('Kantor_model');
    }

    function masuk()
    {
      $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->admin_model->get_admin($id_user);
        $data['kantor'] = $this->Kantor_model->get_all_kantor();

        $data['_view'] = 'getstarted/masuk';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar', $data);
      $this->load->view('templates/dashboard/leftbar', $data);
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/getting-started/barang-masuk',$data);
        $this->load->view('templates/dashboard/footer');

    }

    function perawatan()
    {
      $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->admin_model->get_admin($id_user);
        $data['kantor'] = $this->Kantor_model->get_all_kantor();

        $data['_view'] = 'getstarted/perawatan';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar', $data);
      $this->load->view('templates/dashboard/leftbar', $data);
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/getting-started/perawatan-barang',$data);
        $this->load->view('templates/dashboard/footer');

    }

    function kadaluarsa()
    {
      $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->admin_model->get_admin($id_user);
        $data['kantor'] = $this->Kantor_model->get_all_kantor();

        $data['_view'] = 'getstarted/kadaluarsa';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar', $data);
      $this->load->view('templates/dashboard/leftbar', $data);
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/getting-started/barang-kadaluarsa',$data);
        $this->load->view('templates/dashboard/footer');

    }

    function perbaharui()
    {
      $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->admin_model->get_admin($id_user);
        $data['kantor'] = $this->Kantor_model->get_all_kantor();

        $data['_view'] = 'getstarted/perbaharui';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar', $data);
      $this->load->view('templates/dashboard/leftbar', $data);
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/getting-started/perbaharui-barang',$data);
        $this->load->view('templates/dashboard/footer');

    }

}
