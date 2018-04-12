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
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['infos'] = $this->interview_model->get_info();
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->load->view('Admin/fillupinfo', $this->data);
			
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
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->load->view('Admin/afillupeduc', $this->data);
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
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('Admin/fillupapplication', $this->data);
		}	
	}

	public function second() {
		
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['pendings'] = $this->interview_model->get_pending();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
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
				$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
				$this->data['logs'] = $this->record_model->logged_in();
				$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
		        $this->data['cntreferrals'] = $this->record_model->cntreferral();
    			$this->load->view('Admin/existing', $this->data);
			}
		}
	}

	public function selectmatch(){
		$this->load->model('interview_model');
		date_default_timezone_set("Asia/Manila");
			
			if($this->input->post()) {
			$data = $this->input->post();

			$result = $this->interview_model->selectmatch($data);


			$status = $this->input->post('Status');
			$an = $this->input->post('ApplicantNumber');
			$added = $this->input->post('Date_added');
			$today = date("Y-m-d");
            $allowed = date('Y-m-d', strtotime("-3 months", strtotime($added)));
            
            if ($status == "Initial - Failed" && $allowed > date("Y-m-d")) {
            	?>
        			<script type="text/javascript">
        			alert("The applicant is not applicable to re-apply right now.");
        			window.location.href='<?php echo base_url(); ?>index.php/Interview';
        			</script>

        			<?php
            }

            else {
            
				if ($status == "For Initial Interview") {
					
				redirect ("recordmanagement/getdata/".$an);
		    	}
				else if ($status == "For Final Interview") {
					redirect ("recordmanagement/second/".$an);
				}

				else if ($status == "For Assessing") {
					redirect ("adminforms/assessing/".$an);

				}

				else if ($status == "Employee") {
					redirect ("adminforms/assessing");
				}
				
				else if ($status == NULL) {


					redirect ("Interview/fillupeduc");
				}
			}
		}

            	
		}
		
	

	public function prevappmatch() {
		$li = $this->session->userdata('logged_in');
		$fu = $this->session->userdata('filled_up');

		if($fu != TRUE){
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->load->view('Admin/prevappmatch', $this->data);
	}
		else {
			redirect ('Interview/');
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
			$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
	        $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
			$this->data['depts'] = $this->record_model->get_dept();
	    	$this->load->view('Admin/recordsfrmtbl', $this->data);
    	}
    }

public function fillupinfo1(){


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
	
	// Logout from admin page
	public function cancel() {

			redirect ('adminforms');
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
				'Desired' => $this->input->post('Desired'), 
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

	public function try1(){
		$this->load->view('try1');
	}
	public function initial(){
		$li = $this->session->userdata('logged_in');
		$pn = $this->session->userdata('PersonNumber');
		$fu = $this->session->userdata('filled_up');
		if($li == TRUE){
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['admins'] = $this->users_model->admininfo();
		$this->load->view('Admin/initial', $this->data);
		}

	}

	public function backinfo() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['personals'] = $this->interview_model->get_info();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('Admin/previnfo', $this->data);
	}

	public function updateinfo(){
		$fu = $this->session->userdata('filled_up');
		$id = $this->input->post('ApplicantNumber');
		$this->load->model('interview_model');
		
		$this->form_validation->set_rules('FirstName', 'First Name', 'trim|required|is_unique[interview.FirstName]');
		$this->form_validation->set_rules('MiddleName', 'Middle Name', 'trim|required|is_unique[interview.MiddleName]');
		$this->form_validation->set_rules('LastName', 'Last Name', 'trim|required|is_unique[interview.LastName]');
		$this->form_validation->set_rules('Birthday', 'Date of Birth', 'trim|required|is_unique[interview.Birthday]');
		if ($this->form_validation->run() == TRUE) {

		$this->load->model('interview_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->interview_model->updateinfo($id);
			if(!$result) {
					redirect ('Interview/fillupeduc');
				}
				
		}
	}
				else {
					if($this->input->post()) {

					$data = $this->input->post();	

					$this->data['matches'] = $this->interview_model->match($data);
					$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
					$this->data['logs'] = $this->record_model->logged_in();
	    			$this->load->view('Admin/existing', $this->data);
					$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
			        $this->data['cntreferrals'] = $this->record_model->cntreferral();
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

			redirect('recordmanagement/success/'.$id);
		}
	}
	

	public function backeduc() {
		$li = $this->session->userdata('filled_up');
		$id = $this->session->userdata('ApplicantNumber');
		$this->data['infos'] = $this->interview_model->get_info();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['educs'] = $this->interview_model->get_educ();
		$this->load->view('Admin/preveduc', $this->data);
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
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
		$this->data['personals'] = $this->interview_model->get_info();
		$this->data['applies'] = $this->interview_model->get_application();
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['taos'] = $this->interview_model->get_employees();
		$this->load->view('Admin/prevapplication', $this->data);
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
