<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Kebutuhan extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect('');
          }

        $this->load->model('Kebutuhan_model');
        $this->load->model('Divisi_model');
        $this->load->model('Admin_model');
        $this->load->model('Kantor_model');
    }

    /*
     * Listing of beli
     */
    function index()
    {
        $id_user = $this->session->userdata('id_user');
        $id_divisi = $this->session->userdata('id_divisi');
        $by_kantor = $this->input->post('pilih_cabang');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        $data['divisi'] = $this->Divisi_model->get_divisi($id_divisi);
        if($by_kantor == 0){
          $data['kebutuhan'] = $this->Kebutuhan_model->get_all_kebutuhan();
        }
        else{
          $data['kebutuhan'] = $this->Kebutuhan_model->get_kebutuhan_by_kantor($by_kantor);
        }
        $data['kebutuhan2'] = $this->Kebutuhan_model->get_kebutuhan_by_kantor($id_kantor);
        $data['divisi_by_kantor'] = $this->Divisi_model->get_divisi_by_kantor($id_kantor);
        $data['all_user'] = $this->Admin_model->get_all_admin();
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['user'] = $this->Admin_model->get_admin($id_user);

        $data['_view'] = 'kebutuhan/index';
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/topbar');
        $this->load->view('templates/dashboard/leftbar');
        $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/kebutuhan/index',$data);
        $this->load->view('templates/dashboard/footer');
    }

    /*
     * Adding a new beli
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required|integer');
        $id_user = $this->session->userdata('id_user');
		if($this->form_validation->run())
        {
            $params = array(
				'id_divisi' => $this->input->post('id_divisi'),
				'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'id_user' =>  $id_user,
            );

            $kebutuhan_id = $this->Kebutuhan_model->add_kebutuhan($params);
            redirect('kebutuhan/index');
        }
        else
        {
			$this->load->model('Divisi_model');
            $data['all_divisi'] = $this->Divisi_model->get_all_divisi();

            $data['_view'] = 'kebutuhan/add';
            $this->load->view('pages/kebutuhan/add',$data);
        }
    }

    /*
     * Editing a beli
     */
    function edit($id_kebutuhan)
    {
        // check if the beli exists before trying to edit it
        $data['kebutuhan'] = $this->Kebutuhan_model->get_kebutuhan($id_kebutuhan);

        if(isset($data['kebutuhan']['id_kebutuhan']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_barang','Nama Barang','required');
			$this->form_validation->set_rules('jumlah','Jumlah','required|integer');

			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi' => $this->input->post('id_divisi'),
					'nama_barang' => $this->input->post('nama_barang'),
					'jumlah' => $this->input->post('jumlah'),
                );

                $this->Kebutuhan_model->update_kebutuhan($id_kebutuhan,$params);
                redirect('kebutuhan/index');
            }
            else
            {
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'kebutuhan/edit';
                $this->load->view('pages/kebutuhan/edit',$data);
            }
        }
        else
            show_error('The beli you are trying to edit does not exist.');
    }

    /*
     * Deleting beli
     */
    function remove($id_kebutuhan)
    {
        $kebutuhan = $this->Kebutuhan_model->get_kebutuhan($id_kebutuhan);

        // check if the beli exists before trying to delete it
        if(isset($kebutuhan['id_kebutuhan']))
        {
            $this->Kebutuhan_model->delete_kebutuhan($id_kebutuhan);
            redirect('kebutuhan/index');
        }
        else
            show_error('The beli you are trying to delete does not exist.');
    }

}
