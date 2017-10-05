<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class openforms extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
    }

    function index()
    {	
    	$this->load->model('record_model');
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

    	$id = $this->session->userdata('PersonNumber');
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['employs'] = $this->record_model->all_employees();
		$this->data['cntemploys'] = $this->record_model->cnt_employees();
		$this->data['cntpendapplis'] = $this->record_model->cntpendappli();
		$this->data['cntinters'] = $this->record_model->cntinter();
    	$this->load->view('dashboard', $this->data);
    	}
    	else {
    		redirect('Login/');
    	}
    }

    public function getpending()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->get_data($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['records'] = $this->record_model->get_pending();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('pending2', $this->data);
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

			redirect('recordmanagement/success');
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

	function pending(){
		$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('pending', $this->data);
	}

	}

}