<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecordManagement extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
      
    	$this->load->model('record_model');

    }

    function index()
    {	
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

		$this->data['logs'] = $this->record_model->logged_in();
    	$id = $this->session->userdata('PersonNumber');
    	$this->load->view('v_recordmanagement');
    	}
    	else {
    		redirect('walangli');
    	}
    }

    public function logout() {
		$this->load->model('users_model');	
	$this->session->unset_userdata('logged_in');
	// Removing session data
	$sess_array = array(
	'Username' => ''
	);
	$this->users_model->history_out();
	$this->session->unset_userdata('index', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	redirect ('', $data);
	}

	public function second()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->get_data($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['records'] = $this->record_model->get_second();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('finalrecords', $this->data);
    	}
    	}
	}


    public function getdata()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->get_data($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_data();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('records', $this->data);
    	}
    	}
	}

	function insert_initial()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->insert_initial($data);

			redirect('recordmanagement/initialsuccess');
		}
	}

	function insert_final()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->insert_final($data);

			redirect('recordmanagement/finalsuccess');
		}
	}

	function initialsuccess(){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('initialsuccess', $this->data);
	}
	}

	function finalsuccess(){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('finalsuccess', $this->data);
	}
	}

	function success(){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('success', $this->data);
	}
	}

}