<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

 class Stock extends CI_Controller{
     function __construct()
     {
         parent::__construct();
         if($this->session->userdata('status') != "login"){
           redirect('');
           }
         $this->load->model('Transaksi_model');
         $this->load->model('Pemeliharaan_model');
         $this->load->model('Inventory_model');
     }

// ------------------------------------------------------------------------
//                              Fungsi Index
// ------------------------------------------------------------------------
function overview()
{
    $data['sewa'] = $this->Transaksi_model->get_all_sewa();

    $data['_view'] = 'stock/penyewaan';
    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar');
    $this->load->view('templates/dashboard/leftbar');
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/stock/overview',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function penyewaan()
{
    $data['sewa'] = $this->Transaksi_model->get_all_sewa();
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
    $data['_view'] = 'stock/penyewaan';
    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar');
    $this->load->view('templates/dashboard/leftbar');
    // $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/stock/penyewaan',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function pembelian()
{
    $data['beli'] = $this->Transaksi_model->get_all_beli();
    $this->load->model('Vendor_model');
    $data['all_inventory'] = $this->Inventory_model->get_all_inventory();
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();
    $data['_view'] = 'stock/pembelian';

    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar');
    $this->load->view('templates/dashboard/leftbar');
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/stock/pembelian',$data);
    $this->load->view('templates/dashboard/footer');
}
// ------------------------------------------------------------------------
function pemeliharaan()
{
    $data['pemeliharaan'] = $this->Pemeliharaan_model->get_all_pemeliharaan();
    $this->load->model('Inventory_model');
    $data['all_inventory'] = $this->Inventory_model->get_all_inventory();
    $data['_view'] = 'stock/pemeliharaan';

    $this->load->view('templates/dashboard/header');
    $this->load->view('templates/dashboard/topbar');
    $this->load->view('templates/dashboard/leftbar');
    $this->load->view('templates/dashboard/rightbar');
    $this->load->view('pages/stock/pemeliharaan',$data);
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
$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
        $params = array(
    'id_vendor' => $this->input->post('id_vendor'),
    'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
    'periode_start' => $this->input->post('periode_start'),
    'periode_end' => $this->input->post('periode_end'),
    'biaya' => $this->input->post('biaya'),
    'jenis_transaksi' => 'sewa  ',
    'deskripsi' => $this->input->post('deskripsi'),
        );

        $transaksi_id = $this->Transaksi_model->add_transaksi($params);
        redirect('stock/penyewaan');
    }
    else
    {
        $this->load->model('Vendor_model');
        $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

        $data['_view'] = 'stock/sewa';
        $this->load->view('pages/beli/add',$data);
    }
}
// ------------------------------------------------------------------------
function addbeli()
{
    $this->load->library('form_validation');

$this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
$this->form_validation->set_rules('biaya','Biaya','required|integer');
$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
        $params = array(
    'id_vendor' => $this->input->post('id_vendor'),
    'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
    'biaya' => $this->input->post('biaya'),
    'deskripsi' => $this->input->post('deskripsi'),
        );
        $transaksi_id = $this->Transaksi_model->add_transaksi($params);
        redirect('stock/pembelian');
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
$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

if($this->form_validation->run())
    {
        $params = array(
    'id_inventory' => $this->input->post('id_inventory'),
    'biaya' => $this->input->post('biaya'),
    'tanggal' => $this->input->post('tanggal'),
    'deskripsi' => $this->input->post('deskripsi'),
        );

        $pemeliharaan_id = $this->Pemeliharaan_model->add_pemeliharaan($params);
        redirect('stock/pemeliharaan');
    }
    else
    {
  $this->load->model('Inventory_model');
  $data['all_inventory'] = $this->Inventory_model->get_all_inventory();

        $data['_view'] = 'stock/pemeliharaan';
        $this->load->view('pages/stock/pemeliharaan',$data);
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
  $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
            $params = array(
      'id_vendor' => $this->input->post('id_vendor'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'periode_start' => $this->input->post('periode_start'),
      'periode_end' => $this->input->post('periode_end'),
      'biaya' => $this->input->post('biaya'),
      'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->Transaksi_model->update_transaksi($id_sewa,$params);
            redirect('stock/penyewaan');
        }
        else
        {
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

            $data['_view'] = 'stock/editsewa';
            $this->load->view('pages/stock/penyewaan',$data);
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
  $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
            $params = array(
      'id_vendor' => $this->input->post('id_vendor'),
      'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
      'biaya' => $this->input->post('biaya'),
      'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->Transaksi_model->update_transaksi($id_beli,$params);
            redirect('stock/pembelian');
        }
        else
        {
    $this->load->model('Vendor_model');
    $data['all_vendor'] = $this->Vendor_model->get_all_vendor();

            $data['_view'] = 'beli/edit';
            $this->load->view('pages/stock/pembelian',$data);
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
  $this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

  if($this->form_validation->run())
        {
            $params = array(
                'id_inventory' => $this->input->post('id_inventory'),
                'biaya' => $this->input->post('biaya'),
                'tanggal' => $this->input->post('tanggal'),
                'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->Pemeliharaan_model->update_pemeliharaan($id_pemeliharaan,$params);
            redirect('stock/pemeliharaan');
        }
        else
        {
            $this->load->model('Inventory_model');
            $data['all_inventory'] = $this->Inventory_model->get_all_inventory();

            $data['_view'] = 'stock/pemeliharaan';
            $this->load->view('pages/stock/pemeliharaan',$data);
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
        redirect('stock/penyewaan');
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
        redirect('stock/pembelian');
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
        redirect('stock/pemeliharaan');
    }
    else
        show_error('The pemeliharaan you are trying to delete does not exist.');
}
function detail($id_beli)
{
    // check if the beli exists before trying to edit it
    $data['beli'] = $this->Transaksi_model->get_transaksi($id_beli);
    $data['all_inventory'] = $this->Inventory_model->get_transaksi($id_beli);
    $data['_view'] = 'stock/detail';
    $this->load->view('pages/beli/detail',$data);
    $this->load->view('templates/dashboard/footer');
   
}

}
