<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		
		$this->load->view('pages/personmngt');
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

	public function signupsuccess(){
		$this->load->view('pages/success');
	}
	public function profile() {
			
		$this->load->view('pages/personprofile');
	}

	public function employmentedit(){

		$this->load->view('pages/employmentedit');
	}

	public function employedit(){

		$this->load->view('pages/employedit');
	}


}
