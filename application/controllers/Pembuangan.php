<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pembuangan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('');
        }
        $this->load->model('Expired_model');
        $this->load->model('Inventory_model');
        $this->load->model('Divisi_model');
    }

    function index()
    {
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        $data['tidakhabis'] = $this->Expired_model->join_pembuangan();
        $this->load->model('Divisi_model');

        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();

        $data['_view'] = 'pembuangan/index';
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/topbar');
        $this->load->view('templates/dashboard/leftbar');
        $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/pembuangan/index',$data);
        $this->load->view('templates/dashboard/footer');
    }
}