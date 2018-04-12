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
		$this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
    	$this->load->view('dashboard', $this->data);
    	}
    	else {
    		redirect('Login/');
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
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('finalrecords1', $this->data);
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

	function assessing(){
		$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$admin = $this->session->userdata('usertype');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->data['finals'] = $this->record_model->manageronly();


	    $this->load->view('finalmanager', $this->data);
	}
}

	function finalint(){
		$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$admin = $this->session->userdata('usertype');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->data['finals'] = $this->record_model->manageronly();


	    $this->load->view('final', $this->data);
	}
}

    public function getpending()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->get_datafrmtbl($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['records'] = $this->record_model->get_pending();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
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
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
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
			
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('success', $this->data);
	}
	}

	function pending(){
		$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('pending', $this->data);
	}

	}

}