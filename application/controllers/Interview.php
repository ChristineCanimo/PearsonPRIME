<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('interview_model');
    	$this->load->model('record_model');
		$this->load->model('users_model');
	}
	
	public function index()
	{
		$li = $this->session->userdata('logged_in');
		$pn = $this->session->userdata('PersonNumber');
		$fu = $this->session->userdata('filled_up');
		if($fu != TRUE){
			$this->data['admins'] = $this->users_model->admininfo();
			$this->data['logs'] = $this->record_model->logged_in();
			$this->data['infos'] = $this->interview_model->get_info();
			$this->load->view('fillupinfo', $this->data);
			
		}
		else {
			redirect ('Interview/backinfo');
		}
	}

	public function fillupeduc() { 
		$li = $this->session->userdata('logged_in');
		$fu = $this->session->userdata('filled_up');

		if($fu == TRUE){
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('fillupeduc', $this->data);
	}
		else {
			redirect ('Interview/');
		}
	}

	public function fillupapplication() {
		$li = $this->session->userdata('logged_in');
		$fu = $this->session->userdata('filled_up');

		if($fu == TRUE){
		$this->data['taos'] = $this->interview_model->get_employees();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('fillupapplication', $this->data);
		}	
	}

	public function second() {
		
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['pendings'] = $this->interview_model->get_pending();
		$this->load->view('final', $this->data);
	}

	public function fillupinfo(){

		// Check validation for user input in SignUp form
	$this->form_validation->set_rules('FirstName', 'First Name', 'trim|required|is_unique[interview.FirstName]');
	$this->form_validation->set_rules('MiddleName', 'Middle Name', 'trim|required|is_unique[interview.MiddleName]');
	$this->form_validation->set_rules('LastName', 'Last Name', 'trim|required|is_unique[interview.LastName]');
	$this->form_validation->set_rules('Birthday', 'Date of Birth', 'trim|required|is_unique[interview.Birthday]');
	if ($this->form_validation->run() == TRUE) {

		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->fillupinfo($data);
			if(!$result) {
					redirect ('index.php/Interview/index');
				}
				
				else {
					$new = array(
			        'filled_up' => TRUE,
			        'ApplicantNumber' => $result['0']['ApplicantNumber']
					);
					$this->session->set_userdata($new);
					redirect('Interview/fillupeduc');
			}
		}
	}
			else {

				if($this->input->post()) {

				$data = $this->input->post();	

				$this->data['matches'] = $this->interview_model->match($data);
				$this->data['logs'] = $this->record_model->logged_in();
    			$this->load->view('existing', $this->data);
			}
		}
	}
 

	// Logout from admin page
	public function cancel() {

        $id = $this->input->post('ApplicantNumber');
		if($this->input->post()) {
			$data = $this->input->post('ApplicantNumber');	

			$this->interview_model->cancel($data);
			$this->session->unset_userdata('filled_up');
			// Removing session data
			$sess_array = array(
			'ApplicantNumber' => ''
			);
			$this->session->unset_userdata('fillupinfo', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect ('Interview/');
		}
	}

	public function inserteduc(){
		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->inserteduc($data);
			redirect('Interview/fillupapplication');
		}
	}

	public function insertapplication(){
		$id = $this->input->post('ApplicantNumber');
		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$prev = array(
				'ApplicantNumber' => $id, 
				'Company' => $this->input->post('Company'), 
				'Job' => $this->input->post('Job'), 
				'Duration' => $this->input->post('Duration'),
				'NoExperience' => $this->input->post('NoExperience')

			);

			$apply = array(
				'ApplicantNumber' => $id, 
				'Desired' => $this->input->post('PositionDesired'), 
				'Referred' => $this->input->post('Referred'), 
				'Employee' => $this->input->post('Employee'), 
				'Status' => $this->input->post('Status'), 
				
			);

			$result = $this->interview_model->insertapplication($prev, $apply, $id);
			$this->session->unset_userdata('filled_up');
			// Removing session data
			$sess_array = array(
			'ApplicantNumber' => ''
			);
			$this->session->unset_userdata('fillupinfo', $sess_array);
			$data['message_display'] = 'Successfully Logout';

			redirect('recordmanagement/success/'.$id);
		}
	}

	public function initial(){
		$li = $this->session->userdata('logged_in');
		$pn = $this->session->userdata('PersonNumber');
		$fu = $this->session->userdata('filled_up');
		if($li == TRUE){
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['admins'] = $this->users_model->admininfo();
		$this->load->view('initial', $this->data);
		}

	}

	public function backinfo() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['personals'] = $this->interview_model->get_info();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('previnfo', $this->data);
	}

	public function updateinfo(){
		$fu = $this->session->userdata('filled_up');
		$id = $this->input->post('ApplicantNumber');
		$this->load->model('interview_model');
		
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->updateinfo($id);

			if ($result) {
				redirect('Interview/backeduc');
			}
			else {
			    redirect('Interview/fillupeduc');
		}
	}
	}

	public function updateapplication(){
		$fu = $this->session->userdata('filled_up');
		$id = $this->input->post('ApplicantNumber');
		$this->load->model('interview_model');
		
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->updateapplication($id);

			$this->session->unset_userdata('filled_up');
			// Removing session data
			$sess_array = array(
			'ApplicantNumber' => ''
			);
			$this->session->unset_userdata('fillupinfo', $sess_array);
			$data['message_display'] = 'Successfully Logout';

			redirect('Interview/initial');
		}
	}
	

	public function backeduc() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['educs'] = $this->interview_model->get_educ();
		$this->load->view('preveduc', $this->data);
	}

	public function updateeduc(){
		$this->load->model('interview_model');
		$fu = $this->session->userdata('filled_up');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->updateeduc($data);

			if ($result == TRUE) {
				redirect('Interview/backapplication');
			}
			else {
				redirect('Interview/fillupapplication');
		}
	}}

	public function backapplication() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['personals'] = $this->interview_model->get_info();
		$this->data['applies'] = $this->interview_model->get_application();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['taos'] = $this->interview_model->get_employees();
		$this->load->view('prevapplication', $this->data);
	}

	public function khym(){
		
			$this->session->unset_userdata('filled_up');
			// Removing session data
			$sess_array = array(
			'ApplicantNumber' => ''
			);
			$this->session->unset_userdata('fillupinfo', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			redirect('recordmanagement/');
		
		}

	
}
