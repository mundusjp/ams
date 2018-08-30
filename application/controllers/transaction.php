<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

 class transaction extends CI_Controller{
     function __construct()
     {
         parent::__construct();
         if($this->session->userdata('status') != "login"){
           redirect('');
           }
         $this->load->model('Transaksi_model');
         $this->load->model('Pemeliharaan_model');
         $this->load->model('TidakHabis_model');

         $this->load->model('Inventory_model');
        $this->load->model('Vendor_model');
        $this->load->model('Eventlog_model');
        $this->load->model('admin_model');
        $this->load->model('Kantor_model');
        $this->load->model('Divisi_model');
     }

// ------------------------------------------------------------------------
//                              Fungsi Index
// ------------------------------------------------------------------------
function overview()
{
    $id_user = $this->session->userdata('id_user');
    $data['user'] = $this->admin_model->get_admin($id_user);
    $data['sewa'] = $this->Transaksi_model->get_all_sewa();

    $data['_view'] = 'transaction/penyewaan';
    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar', $data);
    $this->load->view('templates/dashboard/leftbar', $data);
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/transaction/overview',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function penyewaan()
{
    $id_user = $this->session->userdata('id_user');
    $id_divisi = $this->session->userdata('id_divisi');
   $by_kantor = $this->input->post('pilih_cabang');
   $divisi = $this->Divisi_model->get_divisi($id_divisi);
   $id_kantor = $divisi['id_kantor'];
   if($by_kantor == 0){
     $data['penyewaan'] = $this->Transaksi_model->get_all_sewa();
   }
   else{
     $data['penyewaan'] = $this->Transaksi_model->get_sewa_by_kantor($by_kantor);
   }
   $data['penyewaan2'] = $this->Transaksi_model->get_sewa_by_kantor($id_kantor);
   $data['by_kantor'] = $by_kantor;
    $data['user'] = $this->admin_model->get_admin($id_user);
    //$data['sewa'] = $this->Transaksi_model->get_all_sewa();
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
    $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
    $data['_view'] = 'transaction/penyewaan';
    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar', $data);
    $this->load->view('templates/dashboard/leftbar', $data);
    // $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/transaction/penyewaan',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function pembelian()
{
    $id_user = $this->session->userdata('id_user');
    $id_divisi = $this->session->userdata('id_divisi');
    $by_kantor = $this->input->post('pilih_cabang');
    $divisi = $this->Divisi_model->get_divisi($id_divisi);
    $id_kantor = $divisi['id_kantor'];
    if($by_kantor == 0){
      $data['pembelian'] = $this->Transaksi_model->get_all_beli();
    }
    else{
      $data['pembelian'] = $this->Transaksi_model->get_beli_by_kantor($by_kantor);
    }
    $data['pembelian2'] = $this->Transaksi_model->get_beli_by_kantor($id_kantor);
    $data['by_kantor'] = $by_kantor;
    $data['user'] = $this->admin_model->get_admin($id_user);
    $data['beli'] = $this->Transaksi_model->get_all_beli();
    $this->load->model('Vendor_model');
    $data['all_inventory'] = $this->Inventory_model->get_all_inventory();
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
    $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
    $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
    $data['_view'] = 'transaction/pembelian';

    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar', $data);
    $this->load->view('templates/dashboard/leftbar', $data);
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/transaction/pembelian',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function pemeliharaan()
{
    $id_user = $this->session->userdata('id_user');
    $data['user'] = $this->admin_model->get_admin($id_user);
    $data['pemeliharaan'] = $this->Pemeliharaan_model->get_all_pemeliharaan();
    $this->load->model('Inventory_model');
    $data['all_bthp'] = $this->TidakHabis_model->get_all_tidakhabis();
    $data['all_inventory'] = $this->Inventory_model->get_all_inventory();
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
    $data['_view'] = 'transaction/pemeliharaan';

    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar', $data);
    $this->load->view('templates/dashboard/leftbar', $data);
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/transaction/pemeliharaan',$data);
    $this->load->view('templates/dashboard/footer');

}

// ------------------------------------------------------------------------
//                              Fungsi Add
// ------------------------------------------------------------------------

function addsewa()
{
    $this->load->library('form_validation');

$this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
$this->form_validation->set_rules('periode_start','Periode Start','required');
$this->form_validation->set_rules('periode_end','Periode End','required');
$this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
// $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
      $status = $this->session->userdata('level');
      if($status == 1){
        $id_kantor = $this->input->post('id_kantor');
      }
      else if($status == 2){
        $id_divisi = $this->session->userdata('id_divisi');
        $divisi = $this->Divisi_model->get_divisi($id_divisi);
        $id_kantor = $divisi['id_kantor'];
      }
        $params = array(
    'no_nota' => $this->input->post('no_nota'),
    'id_vendor' => $this->input->post('id_vendor'),
    'id_kantor' => $id_kantor,
    'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
    'periode_start' => $this->input->post('periode_start'),
    'periode_end' => $this->input->post('periode_end'),
    'biaya' => $this->input->post('biaya'),
    'jenis_transaksi' => 'sewa',
    'deskripsi' => $this->input->post('deskripsi'),
        );

        $transaksi_id = $this->Transaksi_model->add_transaksi($params);
        $desc =('menambahkan'.' '.$this->input->post('no_nota'));
        $log = array(
            'id_user' => $this->session->userdata('id_user'),
            'event' => 'menambahkan penyewaan',
            'ref_id' =>  $transaksi_id,
            'eventDesc' => $desc,
            'eventTable' => 'transaksi',
        );
        $eventlog_id = $this->Eventlog_model->add_eventlog($log);
        redirect('transaction/penyewaan');
    }
    else
    {
        $this->load->model('Vendor_model');
        $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

        $data['_view'] = 'transaction/sewa';
        $this->load->view('pages/beli/add',$data);
    }
}
// ------------------------------------------------------------------------
function addbeli()
{
    $this->load->library('form_validation');

$this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
$this->form_validation->set_rules('biaya','Biaya','required|integer');
// $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
      $status = $this->session->userdata('level');
       if($status == 1){
         $params = array(
     'no_nota' => $this->input->post('no_nota'),
     'id_vendor' => $this->input->post('id_vendor'),
     'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
     'biaya' => $this->input->post('biaya'),
     'id_kantor' => $this->input->post('id_kantor'),
     'jenis_transaksi' => 'beli',
     'deskripsi' => $this->input->post('deskripsi'),
         );
       }
       else if($status == 2){
         $id_divisi = $this->session->userdata('id_divisi');
         $divisi = $this->Divisi_model->get_divisi($id_divisi);
         $id_kantor = $divisi['id_kantor'];
         $params = array(
     'no_nota' => $this->input->post('no_nota'),
     'id_vendor' => $this->input->post('id_vendor'),
     'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
     'biaya' => $this->input->post('biaya'),
     'id_kantor' => $id_kantor,
     'jenis_transaksi' => 'beli',
     'deskripsi' => $this->input->post('deskripsi'),
         );
       }
        $transaksi_id = $this->Transaksi_model->add_transaksi($params);
        $desc =('menambahkan'.' '.$this->input->post('no_nota'));
        $log = array(
            'id_user' => $this->session->userdata('id_user'),
            'event' => 'menambahkan pembelian',
            'ref_id' =>  $transaksi_id,
            'eventDesc' => $desc,
            'eventTable' => 'transaksi',
        );
        $eventlog_id = $this->Eventlog_model->add_eventlog($log);
        redirect('transaction/pembelian');
    }
    else
    {
  $this->load->model('Vendor_model');
  $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

        $data['_view'] = 'beli/add';
        $this->load->view('pages/beli/add',$data);
    }
}

// ------------------------------------------------------------------------
function addpemeliharaan()
{
    $this->load->library('form_validation');

$this->form_validation->set_rules('id_inventory','Id Inventory','required|integer');
$this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
$this->form_validation->set_rules('tanggal','Tanggal','required');
// $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
        $params = array(
    'id_inventory' => $this->input->post('id_inventory'),
    'id_vendor' =>  $this->input->post('id_vendor'),
    'biaya' => $this->input->post('biaya'),
    'tanggal' => $this->input->post('tanggal'),
    'deskripsi' => $this->input->post('deskripsi'),
        );

        $pemeliharaan_id = $this->Pemeliharaan_model->add_pemeliharaan($params);
        $desc =('menambahkan pemeliharaan'.' '.$this->input->post('id_inventory'));
        $log = array(
            'id_user' => $this->session->userdata('id_user'),
            'event' => 'menambahkan pemeliharaan',
            'ref_id' =>  $pemeliharaan_id,
            'eventDesc' => $desc,
            'eventTable' => 'pemeliharaan',
        );
        $eventlog_id = $this->Eventlog_model->add_eventlog($log);
        redirect('transaction/pemeliharaan');
    }
    else
    {
  $this->load->model('Inventory_model');
  $data['all_inventory'] = $this->Inventory_model->get_all_inventory();

        $data['_view'] = 'transaction/pemeliharaan';
        $this->load->view('pages/transaction/pemeliharaan',$data);
    }
}



// ------------------------------------------------------------------------
//                              Fungsi Edit
// ------------------------------------------------------------------------

function editsewa($id_sewa)
{
    // check if the sewa exists before trying to edit it
    $data['sewa'] = $this->Transaksi_model->get_transaksi($id_sewa);

    if(isset($data['sewa']['id_transaksi']))
    {
        $this->load->library('form_validation');

  $this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
  $this->form_validation->set_rules('periode_start','Periode Start','required');
  $this->form_validation->set_rules('periode_end','Periode End','required');
  $this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
//   $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
            $params = array(
      'no_nota' => $this->input->post('no_nota'),
      'id_vendor' => $this->input->post('id_vendor'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'periode_start' => $this->input->post('periode_start'),
      'periode_end' => $this->input->post('periode_end'),
      'biaya' => $this->input->post('biaya'),
      'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->Transaksi_model->update_transaksi($id_sewa,$params);
            $desc =('mengubah'.' '.$this->input->post('no_nota'));
             $log = array(
            'id_user' => $this->session->userdata('id_user'),
            'event' => 'mengubah penyewaan',
            'ref_id' =>  $id_sewa,
            'eventDesc' => $desc,
            'eventTable' => 'transaksi',
        );
        $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('transaction/penyewaan');
        }
        else
        {
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

            $data['_view'] = 'transaction/editsewa';
            $this->load->view('pages/transaction/penyewaan',$data);
        }
    }
    else
        show_error('The sewa you are trying to edit does not exist.');
}
// ------------------------------------------------------------------------
function editbeli($id_beli)
{
    // check if the beli exists before trying to edit it
    $data['beli'] = $this->Transaksi_model->get_transaksi($id_beli);

    if(isset($data['beli']['id_transaksi']))
    {
        $this->load->library('form_validation');

  $this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
  $this->form_validation->set_rules('biaya','Biaya','required|integer');
  //$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
          $status = $this->session->userdata('level');
           if($status == 1){
            $params = array(
    'no_nota' => $this->input->post('no_nota'),
      'id_vendor' => $this->input->post('id_vendor'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'id_kantor' => $this->input->post('id_kantor'),
      'biaya' => $this->input->post('biaya'),
      'deskripsi' => $this->input->post('deskripsi'),
    );}
          else if($status == 2){
            $params = array(
    'no_nota' => $this->input->post('no_nota'),
      'id_vendor' => $this->input->post('id_vendor'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'biaya' => $this->input->post('biaya'),
      'deskripsi' => $this->input->post('deskripsi'),
    );
          }

            $this->Transaksi_model->update_transaksi($id_beli,$params);
            $desc =('mengubah'.' '.$this->input->post('no_nota'));
            $log = array(
           'id_user' => $this->session->userdata('id_user'),
           'event' => 'mengubah pembelian',
           'ref_id' =>  $id_beli,
           'eventDesc' => $desc,
           'eventTable' => 'transaksi',
                );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('transaction/pembelian');
        }
        else
        {
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

            $data['_view'] = 'beli/edit';
            $this->load->view('pages/transaction/pembelian',$data);
        }
    }
    else
        show_error('The beli you are trying to edit does not exist.');
}
// ------------------------------------------------------------------------
function editpemeliharaan($id_pemeliharaan)
{
    // check if the pemeliharaan exists before trying to edit it
    $data['pemeliharaan'] = $this->Pemeliharaan_model->get_pemeliharaan($id_pemeliharaan);

    if(isset($data['pemeliharaan']['id_pemeliharaan']))
    {
        $this->load->library('form_validation');

  $this->form_validation->set_rules('id_inventory','Id Inventory','required|integer');
  $this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
  $this->form_validation->set_rules('tanggal','Tanggal','required');
//   $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
            $params = array(
                'id_inventory' => $this->input->post('id_inventory'),
                'biaya' => $this->input->post('biaya'),
                'tanggal' => $this->input->post('tanggal'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_vendor' =>  $this->input->post('id_vendor'),

            );

            $this->Pemeliharaan_model->update_pemeliharaan($id_pemeliharaan,$params);
            $desc =('mengubah pemeliharaan barang'.' '.$this->input->post('id_inventory'));
            $log = array(
                    'id_user' => $this->session->userdata('id_user'),
                    'event' => 'mengubah pemeliharaan',
                    'ref_id' =>  $id_pemeliharaan,
                    'eventDesc' => $desc,
                    'eventTable' => 'transaksi',
                );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('transaction/pemeliharaan');
        }
        else
        {
            $this->load->model('Inventory_model');
            $data['all_inventory'] = $this->Inventory_model->get_all_inventory();

            $data['_view'] = 'transaction/pemeliharaan';
            $this->load->view('pages/transaction/pemeliharaan',$data);
        }
    }
    else
        show_error('The pemeliharaan you are trying to edit does not exist.');
}

// ------------------------------------------------------------------------
//                              Fungsi Remove
// ------------------------------------------------------------------------
function removesewa($id_sewa)
{
    $sewa = $this->Transaksi_model->get_transaksi($id_sewa);

    // check if the sewa exists before trying to delete it
    if(isset($sewa['id_transaksi']))
    {
        $this->Transaksi_model->delete_transaksi($id_sewa);
        redirect('transaction/penyewaan');
    }
    else
        show_error('The sewa you are trying to delete does not exist.');
}
// ------------------------------------------------------------------------
function removebeli($id_beli)
{
    $beli = $this->Transaksi_model->get_transaksi($id_beli);

    // check if the beli exists before trying to delete it
    if(isset($beli['id_transaksi']))
    {
        $this->Transaksi_model->delete_transaksi($id_beli);
        redirect('transaction/pembelian');
    }
    else
        show_error('The beli you are trying to delete does not exist.');
}
// ------------------------------------------------------------------------
function removepemeliharaan($id_pemeliharaan)
{
    $pemeliharaan = $this->Pemeliharaan_model->get_pemeliharaan($id_pemeliharaan);

    // check if the pemeliharaan exists before trying to delete it
    if(isset($pemeliharaan['id_pemeliharaan']))
    {
        $this->Pemeliharaan_model->delete_pemeliharaan($id_pemeliharaan);
        redirect('transaction/pemeliharaan');
    }
    else
        show_error('The pemeliharaan you are trying to delete does not exist.');
}
function detail($id_beli)
{
    // check if the beli exists before trying to edit it
    $data['beli'] = $this->Transaksi_model->get_transaksi($id_beli);
    $data['all_inventory'] = $this->Inventory_model->get_transaksi($id_beli);
    $data['_view'] = 'transaction/detail';
    $this->load->view('pages/beli/detail',$data);
    $this->load->view('templates/dashboard/footer');

}

}
