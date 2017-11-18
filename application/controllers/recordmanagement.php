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

	public function tofinal($id='')
	{
		redirect('recordmanagement/second/'.$id);
	}

	public function second($id='')
    {
    	$this->load->model('record_model');
			
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['records'] = $this->record_model->get_second($id);
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('finalrecords', $this->data);
    	}
	}

	public function second1()
    {
    	$this->load->model('record_model');
			
			$data = $this->input->post();	

			$result = $this->record_model->get_datafrmtbl($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['records'] = $this->record_model->get_second1();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('finalrecords', $this->data);
    	}
	}

	public function getdatafrmtable()
    {
    	$this->load->model('record_model');
			
			$data = $this->input->post();	

			$result = $this->record_model->get_datafrmtbl($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_datafrmtbl();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('records', $this->data);
    	}
    }

    public function getdata($id = '')
    {
    	$this->load->model('record_model');
			
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_data($id);
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('records', $this->data);
    	}
    	
	}

	public function toinitial($id='')
	{
		redirect('recordmanagement/getdata/'.$id);
	}

	function insert_initial()
    {
    	$this->load->model('record_model');
		$id = $this->input->post('ApplicantNumber');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->insert_initial($data);

			redirect('recordmanagement/initialsuccess/'.$id);
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

	function initialsuccess1(){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('initialsuccess', $this->data);
	}
	}

		function initialsuccess($id=' '){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['ids'] = $this->record_model->ids($id);

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

	function success($id = ' '){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$id1 = $this->session->userdata('ApplicantNumber');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['ids'] = $this->record_model->ids($id);
		

	    $this->load->view('success', $this->data);
	}
	}

}