<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class interviewprocess extends CI_Controller 
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
		$this->data['ages'] = $this->record_model->age();
		$this->data['cntemploys'] = $this->record_model->cnt_employees();
		$this->data['cntpendapplis'] = $this->record_model->cntpendappli();
		$this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
		$this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
    	$id = $this->session->userdata('PersonNumber');
    	$this->load->view('Admin/aforinitial', $this->data);
    	}
    	else {
    		redirect('walangli');
    	}
    }

    function aforfinal()
    {	
    	$li = $this->session->userdata('logged_in');
		if($li == TRUE){

		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['ages'] = $this->record_model->age();
		$this->data['cntemploys'] = $this->record_model->cnt_employees();
		$this->data['cntpendapplis'] = $this->record_model->cntpendappli();
		$this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
		$this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
    	$id = $this->session->userdata('PersonNumber');
    	$this->load->view('Admin/aforfinal', $this->data);
    	}
    	else {
    		redirect('walangli');
    	}
    }

    Public function get_dept()
	{
		$result=$this->db->query("SELECT * FROM `jobopenings` WHERE `NoNeeded` > '0'")
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
			$this->data['referrals'] = $this->record_model->referral();
        	$this->data['newhires'] = $this->record_model->getnh_info();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['taos'] = $this->interview_model->get_employees();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/finalrecords', $this->data);
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
        	$this->data['newhires'] = $this->record_model->getnh_info();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['taos'] = $this->interview_model->get_employees();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/finalrecords', $this->data);
    	}
	}

	public function agetdatafrmtable()
    {
    	$this->load->model('record_model');
			
			$data = $this->input->post();	

			$result = $this->record_model->get_datafrmtbl($data);

			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_datafrmtbl();
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
            $this->data['taos'] = $this->interview_model->get_employees();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/ainitialfrmtbl', $this->data);
    	}
    }

    public function getdata($id = '')
    {
    	$this->load->model('record_model');
			
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
			$this->data['records'] = $this->record_model->get_data($id);
			$this->data['referrals'] = $this->record_model->referral();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/records', $this->data);
    	}
    	
	}

	function ainsert_initial()
    {
    	$this->load->model('record_model');
		$id = $this->input->post('ApplicantNumber');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->record_model->insert_initial($data);

			redirect('interviewprocess/ainitialsuccess/'.$id);
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
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	    $this->data['cntreferrals'] = $this->record_model->cntreferral();

	    $this->load->view('Admin/initialsuccess', $this->data);
	}
	}

		function ainitialsuccess($id=' '){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	    $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['ids'] = $this->record_model->ids($id);

	    $this->load->view('Admin/ainitialsuccess', $this->data);
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

	    $this->load->view('Admin/finalsuccess', $this->data);
	}
	}

	function asuccess($id = ' '){
    	$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$id1 = $this->session->userdata('ApplicantNumber');
		if($li == TRUE){
			
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	    $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['ids'] = $this->record_model->ids($id);
		

	    $this->load->view('Admin/asuccess', $this->data);
	}
	}

	function withdrawfinal()
    {
    	$this->load->model('record_model');
			
			if($this->input->post()) {
			$id = $this->input->post('ApplicantNumber');	

			$result = $this->record_model->withdrawfinal($id);

			redirect('interviewprocess/aforfinal');
		}
	}
}