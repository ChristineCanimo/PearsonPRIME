<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newhireforms extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
    	$this->load->model('users_model');

    }

    function index()
    {	
        $this->load->model('record_model');
    	$this->load->model('interview_model');
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

    	$id = $this->session->userdata('PersonNumber');
        $this->data['taos'] = $this->interview_model->get_employees();
        $this->data['employs'] = $this->record_model->all_employees();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['jobs'] = $this->record_model->job();
		$this->data['logs'] = $this->record_model->logged_in();
    	$this->load->view('Admin/newhire1', $this->data);
    	}
    	else {
    		redirect('Login/');
    	}
    }

    public function newhire2()
    {
    	$this->load->model('record_model');

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('newhire2', $this->data);
    	}
    }

    public function newhire3()
    {
    	$this->load->model('record_model');
    	$this->load->model('interview_model');
    	
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['taos'] = $this->interview_model->get_employees();
	    	$this->load->view('newhire3', $this->data);
    	}
    }

    public function managepayroll()
    {
    	$this->load->model('record_model');
    	
    		if($this->input->post()) {
			$data = $this->input->post();	
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('managepayroll', $this->data);
	    }
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