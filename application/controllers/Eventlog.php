<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Eventlog extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Eventlog_model');
        $this->load->model('admin_model');

    } 

    /*
     * Listing of eventlog
     */
    function index()
    {
        $data['eventlog'] = $this->Eventlog_model->get_all_eventlog();
			$data['all_user'] = $this->admin_model->get_all_admin();
        $data['_view'] = 'eventlog/index';
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/topbar');
        $this->load->view('templates/dashboard/leftbar');
        $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/eventlog/index',$data);
        $this->load->view('templates/dashboard/footer');
    }

    /*
     * Adding a new eventlog
     */
    function add()
    {   
        $this->load->library('form_validation');

		// $this->form_validation->set_rules('id_user','Id User','required|integer');
		$this->form_validation->set_rules('event','Event','required|max_length[50]');
		$this->form_validation->set_rules('ref_id','Ref Id','required|integer');
		$this->form_validation->set_rules('eventDesc','EventDesc','max_length[191]');
		$this->form_validation->set_rules('eventTable','EventTable','required|max_length[50]');
		$this->form_validation->set_rules('eventTime','EventTime','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'event' => $this->input->post('event'),
				'ref_id' => $this->input->post('ref_id'),
				'eventDesc' => $this->input->post('eventDesc'),
				'eventTable' => $this->input->post('eventTable'),
				'eventTime' => $this->input->post('eventTime'),
            );
            
            $eventlog_id = $this->Eventlog_model->add_eventlog($params);
            redirect('eventlog/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_user'] = $this->User_model->get_all_user();
            
            $data['_view'] = 'eventlog/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a eventlog
     */
    function edit($id_event)
    {   
        // check if the eventlog exists before trying to edit it
        $data['eventlog'] = $this->Eventlog_model->get_eventlog($id_event);
        
        if(isset($data['eventlog']['id_event']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_user','Id User','required|integer');
			$this->form_validation->set_rules('event','Event','required|max_length[50]');
			$this->form_validation->set_rules('ref_id','Ref Id','required|integer');
			$this->form_validation->set_rules('eventDesc','EventDesc','max_length[191]');
			$this->form_validation->set_rules('eventTable','EventTable','required|max_length[50]');
			$this->form_validation->set_rules('eventTime','EventTime','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'event' => $this->input->post('event'),
					'ref_id' => $this->input->post('ref_id'),
					'eventDesc' => $this->input->post('eventDesc'),
					'eventTable' => $this->input->post('eventTable'),
					'eventTime' => $this->input->post('eventTime'),
                );

                $this->Eventlog_model->update_eventlog($id_event,$params);            
                redirect('eventlog/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_user'] = $this->User_model->get_all_user();

                $data['_view'] = 'eventlog/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The eventlog you are trying to edit does not exist.');
    } 

    /*
     * Deleting eventlog
     */
    function remove($id_event)
    {
        $eventlog = $this->Eventlog_model->get_eventlog($id_event);

        // check if the eventlog exists before trying to delete it
        if(isset($eventlog['id_event']))
        {
            $this->Eventlog_model->delete_eventlog($id_event);
            redirect('eventlog/index');
        }
        else
            show_error('The eventlog you are trying to delete does not exist.');
    }
    
}