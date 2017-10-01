<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('interview_model');
	}
	
	public function index()
	{
		$li = $this->session->userdata('filled_up');
		if($li != TRUE){
			$this->load->view('fillupinfo');
			
		}
		else {
			redirect ('Interview/fillupeduc');
		}
	}

	public function fillupeduc() { 
			
		$this->load->view('fillupeduc');
	}

	public function fillupinitial() {
			
		$this->load->view('fillupinitial');
	}

	public function fillupinfo(){
		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->fillupinfo($data);
			if(!$result) {
					redirect ('index.php/Interview/index');
				}
				
				else {
					$newdata = array(
			        'filled_up' => TRUE,
			        'ApplicantNumber' => $result['0']['ApplicantNumber']
					);
					$this->session->set_userdata($newdata);
					redirect('Interview/fillupeduc');
		}
	}
}

	// Logout from admin page
	public function cancel() {
	$this->session->unset_userdata('filled_up');
	// Removing session data
	$sess_array = array(
	'ApplicantNumber' => ''
	);
	$this->session->unset_userdata('fillupinfo', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	redirect ('', $data);
	}

	public function inserteduc(){
		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->inserteduc($data);
			redirect('Interview/fillupinitial');
		}
	}

	public function insertinitial(){
		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->insertinitial($data);
			$this->session->unset_userdata('filled_up');
			// Removing session data
			$sess_array = array(
			'ApplicantNumber' => ''
			);
			$this->session->unset_userdata('fillupinfo', $sess_array);
			$data['message_display'] = 'Successfully Logout';

			redirect('Interview/index');
		}
	}

	public function backinfo() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['personals'] = $this->interview_model->get_info();
		$this->load->view('previnfo', $this->data);
	}

	public function updateinfo(){
		$li = $this->session->userdata('filled_up');
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

	public function backeduc() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['educs'] = $this->interview_model->get_educ();
		$this->load->view('preveduc', $this->data);
	}

	public function updateeduc(){
		$this->load->model('interview_model');
		$id = $this->input->post('ApplicantNumber');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->updateeduc($data,$id);

			if ($result) {
				redirect('Interview/backinitial');
			}
			else {
				redirect('Interview/fillupinitial');
		}
	}}
		
}
