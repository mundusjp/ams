<?php
  class Pages extends CI_Controller{
    function __construct(){
      parent::__construct();
      if($this->session->userdata('status') != "login"){
        redirect('');
      }
      $this->load->model('Expired_model');
      $this->load->model('Inventory_model');
      $this->load->model('Kebutuhan_model');
      $this->load->model('Kantor_model');
      $this->load->model('admin_model');
      $this->load->model('Vendor_model');

    }
    public function view($page ='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $id_user = $this->session->userdata('id_user');
      $data['user'] = $this->admin_model->get_admin($id_user);
      $data['inventory'] = $this->Inventory_model->get_all_inventory();
      $status = $this->session->userdata('level');
      $id_divisi = $this->session->userdata('id_divisi');
      $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
      foreach ($kantor as $k) {
        $id_kantor = $k['id_kantor'];
      }
      if($status == 1){
        $tidakhabis = $this->Expired_model->join();
      }
      else if ($status == 2){
        
        $tidakhabis = $this->Expired_model->join_by_kantor($id_kantor);
      }
      //$tidakhabis = $this->Expired_model->join();
      // $from = new DateTime($data['tanggal']);
      $data['date2'] = new DateTime();
      $date2 = new DateTime();
      $result = $date2->format('Y-m-d H:i:s');
      $count=0;
      foreach($tidakhabis as $t){
        if (!is_null($t->durability)){
        $tanggal = $t->tanggal;
        $date = explode(" ",$tanggal);
        $date = $date[0];
        $datetime = new DateTime($t->tanggal);
        $diff = date_diff( $datetime, $date2 );
        $selisih = $diff->m + ($diff->y * 12);
        if (($t->durability - $selisih) <= 6 ){
            $count++;
        }}
      }
      $data['count'] = $count;
      $data['count_kebutuhan'] = count($this->Kebutuhan_model->get_all_kebutuhan());
      $data['count_vendor'] =count($this->Vendor_model->get_all_vendor());
      $data['count_kebutuhan2'] = count($this->Kebutuhan_model->get_kebutuhan_by_kantor($id_kantor));
      $data['count_inventory'] = count($this->Inventory_model->get_all_inventory_kantor($id_kantor));
      $data['count_inventory2'] = count($this->Inventory_model->get_inventory_by_kantor($id_kantor));
      $data['eventlog'] = $this->admin_model->get_all_eventlog();
      $data['eventlog2'] = $this->admin_model->get_eventlog_by_kantor($id_kantor);
      
      $data['title'] = ucfirst($page);
      $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar', $data);
      $this->load->view('templates/dashboard/leftbar', $data);
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/'.$page,$data);
      $this->load->view('templates/dashboard/footer');
    }
  }