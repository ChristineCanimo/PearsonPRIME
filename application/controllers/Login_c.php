<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			redirect ('Employees/index');
		}
		else{
		$this->load->view('pages/index');
		}
	}
	
	public function newhradmin(){
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			redirect ('Login_c/Signup');
		}
		else{
			redirect ('Employees/index');
		}
	}

	public function Signup(){
		$this->load->view('pages/signup');
	}
	public function login() {

			$this->load->helper(array('form', 'url'));
			$this->load->library('Form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('Username', 'Username', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
			{
				echo "wrong password";
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('users_model');				
				$data = $this->input->post();
				$this->users_model->login($data['Username'], $data ['Password']);
		
				$result=$this->users_model->login($data['Username'], $data ['Password']);
				
				if(!$result) {
					redirect ('login_c/incorrect');
				}
				
				else {
					$newdata = array(
			        'logged_in' => TRUE,
			        'PersonNumber' => $result['0']['PersonNumber']
					);
					$this->session->set_userdata($newdata);
					$this->users_model->history();
					redirect ('Employees/index');
				}
				
			}
		}	
	}

		// Logout from admin page
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

	public function tempologin() {
			
		$this->load->view('pages/personmngt');
	}

	public function incorrect() {
			
		$this->load->view('pages/incorrectpass');
	}
}
