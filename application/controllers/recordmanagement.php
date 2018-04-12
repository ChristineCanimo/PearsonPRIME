<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecordManagement extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
      
    	$this->load->model('record_model');
    	$this->load->model('interview_model');

    }

    function index()
    {	
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['ages'] = $this->record_model->age();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
    	$id = $this->session->userdata('PersonNumber');
    	$this->load->view('forinitial', $this->data);
    	}
    	else {
    		redirect('walangli');
    	}
    }

    function forfinal()
    {	
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['ages'] = $this->record_model->age();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
    	$id = $this->session->userdata('PersonNumber');
    	$this->load->view('forfinal', $this->data);
    	}
    	else {
    		redirect('walangli');
    	}
    }

    Public function get_dept()
	{
		$result=$this->db->query("SELECT Distinct Department FROM `jobopenings` WHERE `NoNeeded` >> '0'")
        				->result();
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->Department;
			$data['label']=$r->Department;
			$json[]=$data;
			
			
		}
		echo json_encode($json);
		

	
	}

	Public function get_job()
	{
 
		  $result=$this->db->where('Department',$_POST['id'])
						->get('jobopenings')
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->JobTitle;
			$data['label']=$r->JobTitle;
			$json[]=$data;
			
			
		}
		echo json_encode($json);

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
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
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
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['depts'] = $this->record_model->get_dept();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
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
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/records', $this->data);
    	}
    	
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

		else{
			echo "kahitanosabihinmo";
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
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['ids'] = $this->record_model->ids($id);
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();

	    $this->load->view('initialsuccess', $this->data);
	}
	}

	function finalsuccess(){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();

	    $this->load->view('finalsuccess', $this->data);
	}
	}

	function success($id = ' '){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$id1 = $this->session->userdata('ApplicantNumber');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['ids'] = $this->record_model->ids($id);
		

	    $this->load->view('Admin/success', $this->data);
	}
	}

}