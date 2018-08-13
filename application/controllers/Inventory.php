<?php

class Inventory extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->model('Habis_model');
        $this->load->model('TidakHabis_model');
        $this->load->model('Kantor_model');
        $this->load->model('Divisi_model');
        $this->load->model('Admin_model');
        $this->load->model('Kebutuhan_model');
        $this->load->model('Eventlog_model');
        $this->load->model('Penggunaan_model');
        $this->load->model('Vendor_model');

    }

    /*
     * Listing of inventory
     */
    function overview()
    {
        $id_user = $this->session->userdata('id_user');
        $by_kantor = $this->input->post('pilih_cabang');
        $data['by_kantor'] = $by_kantor;
        $id_divisi = $this->session->userdata('id_divisi');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        if($by_kantor == 0){
          $data['inventory'] = $this->Inventory_model->get_all_inventory_kantor();
        }
        else{
          $data['inventory'] = $this->Inventory_model->get_inventory_by_kantor($by_kantor);
        }
        $data['inventory2'] = $this->Inventory_model->get_inventory_by_kantor($id_kantor);
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['user'] = $this->Admin_model->get_admin($id_user);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/inventory/index',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function bhp()
    {
      $id_user = $this->session->userdata('id_user');
      $data['user'] = $this->Admin_model->get_admin($id_user);
      $by_kantor = $this->input->post('pilih_cabang');
      $data['by_kantor'] = $by_kantor;
      $id_divisi = $this->session->userdata('id_divisi');
      $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
      foreach ($kantor as $k) {
        $id_kantor = $k['id_kantor'];
      }
      if($by_kantor == 0){
        $data['habis'] = $this->Habis_model->get_all_habis_kantor();
      }
      else{
        $data['habis'] = $this->Habis_model->get_habis_by_kantor($by_kantor);
      }
      $data['habis2'] = $this->Habis_model->get_habis_by_kantor($id_kantor);
      $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
      $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
      $data['divisi'] = $this->Divisi_model->get_divisi($id_divisi);
      $data['divisi_by_kantor'] = $this->Divisi_model->get_divisi_by_kantor($id_kantor);
      $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/habis/index',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function bthp()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->Admin_model->get_admin($id_user);
        $by_kantor = $this->input->post('pilih_cabang');
        $data['by_kantor'] = $by_kantor;
        $id_divisi = $this->session->userdata('id_divisi');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        if($by_kantor == 0){
          $data['tidakhabis'] = $this->TidakHabis_model->get_all_tidakhabis_kantor();
        }
        else{
          $data['tidakhabis'] = $this->TidakHabis_model->get_tidakhabis_by_kantor($by_kantor);
        }
        $data['tidakhabis2'] = $this->TidakHabis_model->get_tidakhabis_by_kantor($id_kantor);
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
        $data['divisi_by_kantor'] = $this->Divisi_model->get_divisi_by_kantor($id_kantor);
        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/tidakhabis/index',$data);
      $this->load->view('templates/dashboard/footer');

    }

    /*
     * Adding a new inventory
     */
    function add_bhp()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('jenis','Jenis','required|integer');
		$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
		$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
    $this->form_validation->set_rules('id_transaksi','Id Transaksi','required|integer');
    $this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('satuan','Satuan','required');

		if($this->form_validation->run())
        {
            $params = array(
				'id_divisi_penerima' => $this->input->post('id_divisi_penerima'),
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'merk' => $this->input->post('merk'),
				'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
				// 'tanggal' => $this->input->post('tanggal'),
				'kategori' =>"beli",
                'id_transaksi' => $this->input->post('id_transaksi'),
                'harga' =>  $this->input->post('harga'),
            );
            $inventory_id = $this->Inventory_model->add_inventory($params);
               $data['last'] = $this->Inventory_model->get_last_id();
                $id = $data['last']->id_inventory;
            $var = array(
               'id_inventory' =>  $data['last']->id_inventory,
                // 'inventory_id' => $this->input->post('inventory_id'),
                'jumlah' => $this->input->post('jumlah'),
                'satuan' => $this->input->post('satuan'),
            );
            $this->Habis_model->add_habis($var);
            $desc =($this->input->post('nama').' '. $this->input->post('jumlah').' '.$this->input->post('satuan'));
            $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'menambahkan Barang Habis Pakai',
				'ref_id' =>  $data['last']->id_inventory,
				'eventDesc' => $desc,
				'eventTable' => 'habispakai',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);

            $inv = $this->Inventory_model->get_inventory($id);
            $time = $inv['tanggal'];
            $time = explode(" ", $time);
            $date = $time[0];
            $date = explode("-", $date);
            $bulan = $date[1];
            if ($bulan == "01" || $bulan == "02" || $bulan == "03") $triwulan = "janmar";
            else if ($bulan == "04" || $bulan == "05" || $bulan == "06") $triwulan = "aprjun";
            else if ($bulan == "07" || $bulan == "08" || $bulan == "09") $triwulan = "julsep";
            else if ($bulan == "10" || $bulan == "11" || $bulan == "12") $triwulan = "oktdes";
            $tahun = $date[0];
            $peng = array(
              'id_inventory' => $inventory_id,
              'jumlah_penggunaan' => $this->input->post('jumlah'),
               'tahun' => $tahun,
               'triwulan' =>$triwulan,
            );
            $penggunaan_id = $this->Penggunaan_model->add_penggunaan($peng);
            redirect('inventory/bhp');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

            $data['_view'] = 'inventory/add_bhp';
            $this->load->view('pages/habis/add',$data);
        }
    }
    function add_bthp()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('jenis','Jenis','required|integer');
		$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
		$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');
        $this->form_validation->set_rules('id_transaksi','Id Beli/sewa','required|integer');
        $this->form_validation->set_rules('serial_id','Serial_id','required');
        $this->form_validation->set_rules('kondisi','Kondisi','required');
        $this->form_validation->set_rules('durability','Durability','required');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run())
        {
            $params = array(
				'id_divisi_penerima' => $this->input->post('id_divisi_penerima'),
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'merk' => $this->input->post('merk'),
				'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
				'tanggal' => $this->input->post('tanggal'),
				'kategori' => $this->input->post('kategori'),
                'id_transaksi' => $this->input->post('id_transaksi'),
                'harga' =>  $this->input->post('harga'),

            );
            $inventory_id = $this->Inventory_model->add_inventory($params);
               $data['last'] = $this->Inventory_model->get_last_id();
                echo  $data['last']->id_inventory ;
            $var = array(
               'id_inventory' =>  $data['last']->id_inventory,
                // 'inventory_id' => $this->input->post('inventory_id'),
                'serial_id' => $this->input->post('serial_id'),
                'kondisi' => $this->input->post('kondisi'),
                'durability' => $this->input->post('durability'),
                'status' => $this->input->post('status'),
            );
            $this->TidakHabis_model->add_tidakhabis($var);
            $desc =($this->input->post('nama').' '. $this->input->post('serial_id').' '.$this->input->post('harga'));
            $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'menambahkan Barang Tidak Habis Pakai',
				'ref_id' =>  $data['last']->id_inventory,
				'eventDesc' => $desc,
				'eventTable' => 'tidakhabispakai',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('inventory/bthp');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

            $data['_view'] = 'inventory/add';
            $this->load->view('pages/tidakhabis/add',$data);
        }
    }

    /*
     * Editing a inventory
     */
    function edit_bhp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['habis'] = $this->Habis_model->get_habis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('jenis','Jenis','required|integer');
			$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
			$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');

			$this->form_validation->set_rules('jumlah','Jumlah','required');
			$this->form_validation->set_rules('satuan','Satuan','required');

			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi_penerima' => $this->input->post('id_divisi_penerima'),
					'nama' => $this->input->post('nama'),
					'jenis' => $this->input->post('jenis'),
					'merk' => $this->input->post('merk'),
					'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
					'tanggal' => $this->input->post('tanggal'),
					'kategori' => $this->input->post('kategori'),
                    'harga' =>  $this->input->post('harga'),

                );
                $var = array(
                    'jumlah' => $this->input->post('jumlah'),
					'satuan' => $this->input->post('satuan'),
                );
                $this->Inventory_model->update_inventory($id_inventory,$params);
                $this->Habis_model->update_habis($id_inventory,$var);
                $desc =$this->input->post('nama');
                $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'mengubah Barang Habis Pakai',
				'ref_id' =>  $id_inventory,
				'eventDesc' => $desc,
				'eventTable' => 'habispakai',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
                redirect('inventory/bhp');
            }
            else
            {

				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit_bhp';
                $this->load->view('pages/habis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    function update_bhp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['habis'] = $this->Habis_model->get_habis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('jumlah1','Jumlah1','required');
            $this->form_validation->set_rules('jumlah','Jumlah','required');
			      $this->form_validation->set_rules('tanda','Tanda','required');

			      if($this->form_validation->run())
            {
              $a = $this->input->post('jumlah');
              $b =$this->input->post('jumlah1');
              $tanda = $this->input->post('tanda');
              if( $tanda=="+"){
                $jumlah = $a+$b ;
                $simbol = 'tambah';
                $par = array(
                        'id_divisi' => $this->input->post('id_divisi'),
                        'id_inventory' => $this->input->post('id_inventory'),
                        'jumlah_penggunaan' => $b,
                        'id_user' => $this->input->post('id_user'),
                        );
              }
              else {
                $jumlah = $a-$b;
                $simbol = 'kurang';
                $par = array(
                        'id_divisi' => $this->input->post('id_divisi'),
                        'nama_barang' => $this->input->post('nama_barang'),
                        'jumlah' => $b,
                        'id_user' => $this->input->post('id_user'),
                        );
                $kebutuhan_id = $this->Kebutuhan_model->add_kebutuhan($par);
              }
              $var = array(
                      'jumlah' => $jumlah,
                      );
              $this->Habis_model->update_habis($id_inventory,$var);
              $desc =($this->input->post('nama_barang').' '. 'ber'.$simbol.' '.$this->input->post('jumlah1'));
              $log = array(
				              'id_user' => $this->session->userdata('id_user'),
				              'event' => $simbol,
				              'ref_id' =>  $id_inventory,
				              'eventDesc' => $desc,
				              'eventTable' => 'habispakai',
                      );
              $eventlog_id = $this->Eventlog_model->add_eventlog($log);
              $time = new DateTime();
              $time = explode(" ",$datetime);
              $date = $time[0];
              $date = explode("-", $date);
              $bulan = $date[1];
              $tahun = $date[0];
              $penggunaan = $this->Penggunaan_model->get_penggunaan($id_inventory);
              if ($bulan == "01" || $bulan == "02" || $bulan == "03") $triwulan = "janmar";
              else if ($bulan == "04" || $bulan == "05" || $bulan == "06") $triwulan = "aprjun";
              else if ($bulan == "07" || $bulan == "08" || $bulan == "09") $triwulan = "julsep";
              else if ($bulan == "10" || $bulan == "11" || $bulan == "12") $triwulan = "oktdes";
              // if($penggunaan->triwulan == $triwulan){
              //   $jumlahBaru = $penggunaan->jumlah_penggunaan + $b;
              //   $penggunaan->jumlah_penggunaan =
              // }

              redirect('inventory/bhp');
            }
            else
            {
              $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
              $data['_view'] = 'inventory/edit_bhp';
              $this->load->view('pages/habis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    function edit_bthp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['tidakhabis'] = $this->TidakHabis_model->get_tidakhabis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('jenis','Jenis','required|integer');
			$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
			$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');
			// $this->form_validation->set_rules('id_transaksi','Id Beli/sewa','required|integer');
            $this->form_validation->set_rules('serial_id','Serial_id','required');
            $this->form_validation->set_rules('kondisi','Kondisi','required');
            $this->form_validation->set_rules('durability','Durability','required');
            $this->form_validation->set_rules('status','Status','required');
			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi_penerima' => $this->input->post('id_divisi_penerima'),
					'nama' => $this->input->post('nama'),
					'jenis' => $this->input->post('jenis'),
					'merk' => $this->input->post('merk'),
					'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
					'tanggal' => $this->input->post('tanggal'),
                    'kategori' => $this->input->post('kategori'),
                    'harga' =>  $this->input->post('harga'),

					// 'id_transaksi' => $this->input->post('id_transaksi'),
                );
                $var = array(
                    'serial_id' => $this->input->post('serial_id'),
                    'kondisi' => $this->input->post('kondisi'),
                    'durability' => $this->input->post('durability'),
                    // 'status' => $this->input->post('status'),
                );
                $this->Inventory_model->update_inventory($id_inventory,$params);
                $this->TidakHabis_model->update_tidakhabis($id_inventory,$var);
                $desc =$this->input->post('serial_id');
                $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'mengubah Barang Tidak Habis Pakai',
				'ref_id' =>  $id_inventory,
				'eventDesc' => $desc,
				'eventTable' => 'tidakhabispakai',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
                redirect('inventory/bthp');
            }
            else
            {
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit_bthp';
                $this->load->view('pages/tidakhabis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    /*
     * Deleting inventory
     */
    function remove_bhp($id_inventory)
    {
        $inventory = $this->Inventory_model->get_inventory($id_inventory);

        // check if the inventory exists before trying to delete it
        if(isset($inventory['id_inventory']))
        {
            $this->Habis_model->delete_habis($id_inventory);
            $this->Inventory_model->delete_inventory($id_inventory);
            // $desc =$this->input->post('nama');
            $log = array(
            'id_user' => $this->session->userdata('id_user'),
            'event' => 'menghapus Barang Habis Pakai',
            'ref_id' =>  $id_inventory,
            // 'eventDesc' => $desc,
            'eventTable' => 'habispakai',
        );
        $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('inventory/bhp');
        }
        else
            show_error('The inventory you are trying to delete does not exist.');
    }
    function remove_bthp($id_inventory)
    {
        $inventory = $this->Inventory_model->get_inventory($id_inventory);

        // check if the inventory exists before trying to delete it
        if(isset($inventory['id_inventory']))
        {
            $this->TidakHabis_model->delete_tidakhabis($id_inventory);
            $this->Inventory_model->delete_inventory($id_inventory);
             // $desc =$this->input->post('nama');
             $log = array(
                'id_user' => $this->session->userdata('id_user'),
                'event' => 'menghapus Barang Tidak Habis Pakai',
                'ref_id' =>  $id_inventory,
                // 'eventDesc' => $desc,
                'eventTable' => 'tidakhabispakai',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('inventory/bthp');
        }
        else
            show_error('The inventory you are trying to delete does not exist.');
    }

    function detail_beli($id_beli)
    {
        $data['inventory'] = $this->Inventory_model->get_beli($id_beli);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/beli/detail',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function detail_sewa($id_sewa)
    {
        $data['inventory'] = $this->Inventory_model->get_sewa($id_sewa);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/beli/detail',$data);
      $this->load->view('templates/dashboard/footer');

    }
}
