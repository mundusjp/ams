<?php
  class Pages extends CI_Controller{

    function __construct(){
      parent::__construct();

      if($this->session->userdata('status') != "login"){
        redirect('');
      }
      $this->load->model('Expired_model');
      $this->load->model('Inventory_model');
    }

    public function view($page ='home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $data['inventory'] = $this->Inventory_model->get_all_inventory();
      $data['tidakhabis'] = $this->Expired_model->join();
      $tidakhabis = $this->Expired_model->join();
      // $from = new DateTime($data['tanggal']);
      $data['date2'] = new DateTime();
      $date2 = new DateTime();
      $result = $date2->format('Y-m-d H:i:s');
      $count=0;
      foreach($tidakhabis as $t){
        $tanggal = $t->tanggal;
        $date = explode(" ",$tanggal);
        $date = $date[0];
        $datetime = new DateTime($t->tanggal);
        $diff = date_diff( $datetime, $date2 );
        $selisih = $diff->m + ($diff->y * 12);
        if (($t->durability - $selisih) <= 6 ){
            $count++;
        }
      }
      $data['count'] = $count;

      $data['title'] = ucfirst($page);

      $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/'.$page,$data);
      $this->load->view('templates/dashboard/footer');
    }
  }
