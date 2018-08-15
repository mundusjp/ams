<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Expired extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('');
            }
        $this->load->model('Expired_model');
        $this->load->model('Inventory_model');
        $this->load->model('Divisi_model');
        $this->load->model('Admin_model');
        $this->load->model('Kantor_model');
    }

    function index()
    {
        $id_user = $this->session->userdata('id_user');
        $id_divisi = $this->session->userdata('id_divisi');
        $by_kantor = $this->input->post('pilih_cabang');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        if($by_kantor == 0){
          $data['expired'] = $this->Expired_model->join();
        }
        else{
          $data['expired'] = $this->Expired_model->join_by_kantor($by_kantor);
        }
        $data['expired2'] = $this->Expired_model->join_by_kantor($id_kantor);
        $data['by_kantor'] = $by_kantor;
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        //$data['tidakhabis'] = $this->Expired_model->join();
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
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $data['user'] = $this->Admin_model->get_admin($id_user);

        $data['_view'] = 'expired/index';
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/topbar');
        $this->load->view('templates/dashboard/leftbar');
        $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/expired/index',$data);
        $this->load->view('templates/dashboard/footer');
    }

    function add($id_inventory)
    {
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $this->load->library('form_validation');
		$this->form_validation->set_rules('pembeli','Pembeli','required|max_length[50]');
		$this->form_validation->set_rules('harga','Harga','required|integer');
		$this->form_validation->set_rules('tanggal','Tanggal','required');

		if($this->form_validation->run())
        {
            $params = array(
				'pembeli' => $this->input->post('pembeli'),
				'harga_jual' => $this->input->post('harga'),
                'tanggal_penjualan' => $this->input->post('tanggal'),
                'id_inventory' => $this->input->post('id_inventory'),
            );
            $param = array(
                'status' => "dijual",
            );
            $penjualan_id = $this->Expired_model->add_penjualan($id_inventory, $params, $param);
            redirect('expired/index');
        }
        else
        {
            $data['_view'] = 'expired/add';
            $this->load->view('pages/expired/add',$data);
        }
    }

    function buang($id_inventory)
    {
        // check if the beli exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $params = array(
                'status' => "dibuang",
            );
            $this->Expired_model->add_pembuangan($id_inventory,$params);
            redirect('expired/index');
        }
        else
            show_error('The beli you are trying to edit does not exist.');
    }

    function kembalikan($id_inventory)
    {
        // check if the beli exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $params = array(
                'status' => "dikembalikan",
            );
            $this->Expired_model->add_pembuangan($id_inventory,$params);
            redirect('expired/index');
        }
        else
            show_error('The beli you are trying to edit does not exist.');
    }

    function perpanjang($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['tidakhabis'] = $this->Expired_model->get_expired($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('durability','Durability','required');

			if($this->form_validation->run())
            {
                $angka1=$this->input->post('durability');
                $angk2=$this->input->post('durability2');
                $jumlah =$angka1+$angk2;
                $params = array(
                    'durability' => $jumlah,
                );
                $this->Expired_model->add_perpanjang($id_inventory,$params);
                redirect('expired/index');
            }
            else
            {
                $data['_view'] = 'expired/perpanjang';
                $this->load->view('pages/expired/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
}
