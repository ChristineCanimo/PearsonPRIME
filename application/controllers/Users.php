<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		
		$this->load->view('pages/index');
	}
	
	public function login() {
		echo 'asdfasdfsda';
		if($this->input->post()) {
		echo 'qwerqwer';
		exit;
			$this->load->model('users_model');
			
			$data=$this->input->post();
			echo 'asdf';
			exit;
			$result = $this->users_model->login($data['username'], $data['password']);
			
			if(!$result) {
				redirect('/users');
			}else {
				redirect('/users/userlist');
				
			}
			
		}
	}
		public function userlist() {
			
			$this->load->view('welcome_message');

			
	
	}
}
