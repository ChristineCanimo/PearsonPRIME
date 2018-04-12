<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rewardpayroll extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
    	$this->load->model('users_model');

    }

    function index()
    {	
    	$this->load->model('record_model');
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

    	$id = $this->session->userdata('PersonNumber');
		$this->data['logs'] = $this->record_model->logged_in();
    	$this->load->view('rewardpayroll1', $this->data);
    	}
    	else {
    		redirect('Login/');
    	}
    }

    public function rewardpayroll2()
    {
    	$this->load->model('record_model');

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('rewardpayroll2', $this->data);
    	}
    }

    public function rewardpayroll3()
    {
    	$this->load->model('record_model');
    	
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('rewardpayroll3', $this->data);
    	}
    }


    public function arecord()
    {
    	$this->load->model('record_model');
    	
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('arecordmanagement', $this->data);
    	}
    }
	
    public function afillupinfo()
	{
		$li = $this->session->userdata('logged_in');
		$pn = $this->session->userdata('PersonNumber');
		$fu = $this->session->userdata('filled_up');
    	$this->load->model('record_model');
    	$this->load->model('interview_model');
    	$this->load->model('users_model');

		if($fu != TRUE){
			$this->data['admins'] = $this->users_model->admininfo();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['infos'] = $this->interview_model->get_info();
			$this->load->view('
				Admin/afillupinfo', $this->data);
			
		}
		else {
			redirect ('adminforms/abackinfo');
		}
	}

    public function afillupeduc()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->get_data($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_data();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('afillupeduc', $this->data);
    	}
    	}
	}

	function insert_initial()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->insert_initial($data);

			redirect('arecordmanagement/success');
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