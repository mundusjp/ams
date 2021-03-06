<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Divisi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('Divisi_model');
        $this->load->model('Kantor_model');
        $this->load->model('Eventlog_model');

    }

    /*
     * Adding a new divisi
     */
    function add()
    {
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_divisi','Nama Divisi','required|max_length[50]');
		$this->form_validation->set_rules('gedung','Gedung','required|max_length[50]');
		$this->form_validation->set_rules('lantai','Lantai','required|integer');
		$this->form_validation->set_rules('id_kantor','Id Kantor','required|integer');

		if($this->form_validation->run())
        {
            $params = array(
				'id_kantor' => $this->input->post('id_kantor'),
				'nama_divisi' => $this->input->post('nama_divisi'),
				'gedung' => $this->input->post('gedung'),
				'lantai' => $this->input->post('lantai'),
            );

            $divisi_id = $this->Divisi_model->add_divisi($params);
            $desc =($this->input->post('nama_divisi').' '.$this->input->post('gedung'));
            $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'menambahkan divisi',
				'ref_id' =>  $divisi_id,
				'eventDesc' => $desc,
				'eventTable' => 'divisi',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('manage/divisi');
        }
        // else
      //   {
			// $this->load->model('Kantor_model');
			// $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
      //
      //       $data['_view'] = 'divisi/add';
      //       $this->load->view('manage/divisi',$data);
      //   }
    }

    /*
     * Editing a divisi
     */
    function edit($id_divisi)
    {
        // check if the divisi exists before trying to edit it
        $data['divisi'] = $this->Divisi_model->get_divisi($id_divisi);

        if(isset($data['divisi']['id_divisi']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_divisi','Nama Divisi','required|max_length[50]');
			$this->form_validation->set_rules('gedung','Gedung','required|max_length[50]');
			$this->form_validation->set_rules('lantai','Lantai','required|integer');
			$this->form_validation->set_rules('id_kantor','Id Kantor','required|integer');

			if($this->form_validation->run())
            {
                $params = array(
					'id_kantor' => $this->input->post('id_kantor'),
					'nama_divisi' => $this->input->post('nama_divisi'),
					'gedung' => $this->input->post('gedung'),
					'lantai' => $this->input->post('lantai'),
                );

                $this->Divisi_model->update_divisi($id_divisi,$params);
                $desc =($this->input->post('nama_divisi').' '.$this->input->post('gedung'));
                $log = array(
                    'id_user' => $this->session->userdata('id_user'),
                    'event' => 'mengubah divisi',
                    'ref_id' =>  $id_divisi,
                    'eventDesc' => $desc,
                    'eventTable' => 'divisi',
                );
                $eventlog_id = $this->Eventlog_model->add_eventlog($log);
                redirect('manage/divisi');
            }
            else
            {
				$this->load->model('Kantor_model');
				$data['all_kantor'] = $this->Kantor_model->get_all_kantor();

                $data['_view'] = 'divisi/edit';
                $this->load->view('pages/divisi/edit',$data);
            }
        }
        else
            show_error('The divisi you are trying to edit does not exist.');
    }

    /*
     * Deleting divisi
     */
    function remove($id_divisi)
    {
        $divisi = $this->Divisi_model->get_divisi($id_divisi);

        // check if the divisi exists before trying to delete it
        if(isset($divisi['id_divisi']))
        {
            $this->Divisi_model->delete_divisi($id_divisi);
                $log = array(
                    'id_user' => $this->session->userdata('id_user'),
                    'event' => 'menghapus divisi',
                    'ref_id' =>  $id_divisi,
                    'eventTable' => 'divisi',
                );
                $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('manage/divisi');
        }
        else
            show_error('The divisi you are trying to delete does not exist.');
    }

}
