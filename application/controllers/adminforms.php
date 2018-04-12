<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminforms extends CI_Controller 
{
	function __construct() 
	{
      parent::__construct();
    	$this->load->model('users_model');

    }

    function index()
    {	
    	$this->load->model('record_model');
    	$li = $this->session->userdata('logged_in');
    	$admin = $this->session->userdata('usertype');
		if($li == TRUE && $admin == "admin"){

    	$id = $this->session->userdata('PersonNumber');
		$this->data['logs'] = $this->record_model->logged_in();
		$this->data['employs'] = $this->record_model->all_employees();
		$this->data['cntemploys'] = $this->record_model->cnt_employees();
		$this->data['cntpendapplis'] = $this->record_model->cntpendappli();
		$this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
		$this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
		$this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
		$this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
    	$this->load->view('Admin/adashboard', $this->data);
    	}
    	else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
    }

    function aadmins()
    {   
        $this->load->model('record_model');
        $li = $this->session->userdata('logged_in');
        $admin = $this->session->userdata('usertype');
        if($li == TRUE && $admin == "admin"){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['employs'] = $this->record_model->all_employees();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->load->view('Admin/aadmins', $this->data);
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }

    function ajobvacancy()
    {   
        $this->load->model('record_model');
        $li = $this->session->userdata('logged_in');
        $admin = $this->session->userdata('usertype');
        if($li == TRUE && $admin == "admin"){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['employs'] = $this->record_model->all_employees();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['jobs'] = $this->record_model->job();
        $this->load->view('Admin/ajobvacancy', $this->data);
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }

    function addjob()
    {       
        $this->load->model('record_model');
        
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->addjob($data);
            redirect('adminforms/ajobvacancy');    
        }
    }

    function editjob()
    {       
        $this->load->model('record_model');
        
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->addjob($data);
            redirect('adminforms/ajobvacancy');    
        }
    }

    function apending()
    {   
        $this->load->model('record_model');
        $li = $this->session->userdata('logged_in');
        $admin = $this->session->userdata('usertype');
        if($li == TRUE && $admin == "admin"){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['employs'] = $this->record_model->all_employees();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->load->view('Admin/apending', $this->data);
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }

    function newhire1()
    {   
        $this->load->model('record_model');

        if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->getnh_info();

        $li = $this->session->userdata('logged_in');
        if($li == TRUE){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['newhires'] = $this->record_model->getnh_info();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->load->view('Admin/processnewhire1', $this->data);
        }
        else {
             ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }
    }

    function rehire()
    {
        $this->load->model('record_model');
            
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->getnh_info();

            $li = $this->session->userdata('logged_in');
        if($li == TRUE){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['records'] = $this->record_model->get_second2();
        $this->data['newhires'] = $this->record_model->getnh_info();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->load->view('Admin/rehire', $this->data);
        }
        else {
             ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }
    }

    function viewassess()
    {   
        $this->load->model('record_model');

        if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->getnh_info();

        $li = $this->session->userdata('logged_in');
        if($li == TRUE){

        $id = $this->session->userdata('PersonNumber');
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['records'] = $this->record_model->get_second2();
        $this->data['newhires'] = $this->record_model->getnh_info();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
        $this->load->view('Admin/viewassess', $this->data);
        }
        else {
             ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
    }
    }

        function addnewhire()
    {   
        $this->load->model('record_model');

        if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->add_newhire($data);

            redirect('adminforms/');
        }
        else {
             ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
    }
}
    
    public function newhire2()
    {
        $this->load->model('record_model');
        $this->load->model('interview_model');

            $li = $this->session->userdata('logged_in');
            if($li == TRUE){
            $this->data['infos'] = $this->interview_model->get_info();
            $this->data['records'] = $this->record_model->get_second1();
            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['depts'] = $this->record_model->get_dept();
            $this->data['newhire2'] = $this->record_model->getnh_info();
            $this->load->view('Admin/processnewhire2', $this->data);
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
            $this->load->view('Admin/processnewhire3', $this->data);
        }
    }

    function managepayroll()
    {		
    	$this->load->model('record_model');
    	
    		if($this->input->post()) {
			$data = $this->input->post();	

			$this->data['logs'] = $this->record_model->logged_in();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
    		$this->load->view('Admin/managepayroll', $this->data);	
    	}
    }

    function referraltoday()
    {       
        $this->load->model('record_model');

        $result = $this->record_model->get_referraltoday();

        if ($result) {
            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['cntemploys'] = $this->record_model->cnt_employees();
            $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
            $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
            $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->data['firsts'] = $this->record_model->get_referraltoday();
            $this->load->view('Admin/referraltoday', $this->data);  
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("No referral incentives to be given this month for the 2nd half.");
                    window.location.href='<?php echo base_url(); ?>index.php/adminforms/rpayroll';
                    </script>
                    <?php
        }
    }
    

    public function try1()
    {
    	$this->load->model('record_model');
    	$this->load->model('interview_model');

			$admin = $this->session->userdata('usertype');
			$li = $this->session->userdata('logged_in');
			if($li == TRUE){
        $this->data['taos'] = $this->interview_model->get_employees();
        $this->data['logs'] = $this->record_model->logged_in();
        $this->data['infos'] = $this->interview_model->get_info();
		$this->load->view('try1', $this->data);
    	}
    }

    public function rpayroll()
    {
    	$this->load->model('record_model');
    	
			$admin = $this->session->userdata('usertype');
			$li = $this->session->userdata('logged_in');
			if($li == TRUE && $admin == "admin"){
			$this->data['logs'] = $this->record_model->logged_in();
	    	$this->load->view('Admin/rewardspayroll', $this->data);
    	}
    	else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
    }

    public function acalendar()
    {
    	$this->load->model('record_model');
    	
			$admin = $this->session->userdata('usertype');
			$li = $this->session->userdata('logged_in');
			if($li == TRUE && $admin == "admin"){
			$this->data['logs'] = $this->record_model->logged_in();
            $this->data['cntemploys'] = $this->record_model->cnt_employees();
            $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
            $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
            $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
	    	$this->load->view('Admin/acalendar', $this->data);
    	}
    	else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
    }

    public function arecord()
    {
    	$this->load->model('record_model');
    	
			$admin = $this->session->userdata('usertype');
			$li = $this->session->userdata('logged_in');
			if($li == TRUE && $admin == "admin"){
			$this->data['logs'] = $this->record_model->logged_in();
            $this->data['cntemploys'] = $this->record_model->cnt_employees();
            $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
            $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
            $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
	    	$this->load->view('Admin/arecordmanagement', $this->data);
    	}
    	else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
    }
	
    public function ainactive()
    {
        $this->load->model('record_model');
        
            $admin = $this->session->userdata('usertype');
            $li = $this->session->userdata('logged_in');
            if($li == TRUE && $admin == "admin"){
            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['cntemploys'] = $this->record_model->cnt_employees();
            $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
            $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
            $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->load->view('Admin/ainactive', $this->data);
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
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
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
			$this->load->view('Admin/afillupinfo', $this->data);
			
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

			$admin = $this->session->userdata('usertype');
			$li = $this->session->userdata('logged_in');
			if($li == TRUE && $admin == "admin"){
			$this->data['records'] = $this->record_model->get_data();
			$this->data['depts'] = $this->record_model->get_dept();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
	    	$this->load->view('Admin/afillupeduc', $this->data);
    	}
    		else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
    	}
	}

    function terminate()
    {
        $this->load->model('record_model');
            
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->term($data);

            redirect('adminforms/arecord');
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
		$admin = $this->session->userdata('usertype');
		$li = $this->session->userdata('logged_in');
		if($li == TRUE && $admin == "admin"){
			
		$this->data['logs'] = $this->record_model->logged_in();

	    $this->load->view('success', $this->data);
	}
		else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
	}

	function assessing($id = " "){
		$this->load->model('record_model');
		$li = $this->session->userdata('logged_in');
		$admin = $this->session->userdata('usertype');
		if($li == TRUE && $admin == "admin"){
			
		$this->data['logs'] = $this->record_model->logged_in();
        $this->data['records'] = $this->record_model->get_second($id);
        $this->data['cntemploys'] = $this->record_model->cnt_employees();
        $this->data['cntpendapplis'] = $this->record_model->cntpendappli();
        $this->data['cntfinalinters'] = $this->record_model->cntfinalinter();
        $this->data['cntinitialinters'] = $this->record_model->cntinitialinter();
        $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
        $this->data['cntreferrals'] = $this->record_model->cntreferral();
        $this->data['cntmanageronlys'] = $this->record_model->cntmanageronly();
	    $this->load->view('Admin/apending', $this->data);
	}
		else {
    		?>
        			<script type="text/javascript">
        			alert("Only an admin can access this page");
        			window.location.href='<?php echo base_url(); ?>';
        			</script>
        			<?php
    	}
	}

Public function get_year()
	{
		$result=$this->db->query("SELECT DISTINCT DATE_FORMAT(`HireDate`, '%Y') AS Year FROM employees")
        				->result();
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->Year;
			$data['label']=$r->Year;
			$json[]=$data;
			
			
		}
		echo json_encode($json);
		

	
	}

	Public function get_month()
	{
 			$year = $_POST['id'];
		  $result=$this->db->query("SELECT DISTINCT DATE_FORMAT(`HireDate`, '%Y') AS Year, DATE_FORMAT(`HireDate`, '%M') AS Month, DATE_FORMAT(`HireDate`, '%c') AS Monthnum FROM employees HAVING Year = $year")
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->Monthnum;
			$data['label']=$r->Month; 
			$json[]=$data;
			
			
		}
		echo json_encode($json);

	}

    Public function firsthalf(){
        $this->load->model('record_model');
        $li = $this->session->userdata('logged_in');
        $admin = $this->session->userdata('usertype');
        if($li == TRUE && $admin == "admin"){
            
         $result = $this->record_model->get_firsthalf();

            if($result){
        
            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['firsts'] = $this->record_model->get_firsthalf();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->load->view('Admin/payrolldate', $this->data);  
        }
            else{
                ?>
                    <script type="text/javascript">
                    alert("No referral incentives to be given this month for the 1st half.");
                    window.location.href='<?php echo base_url(); ?>index.php/adminforms/rpayroll';
                    </script>
                    <?php
            }
    }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
        
           
    }

    Public function secondhalf(){
        $this->load->model('record_model');
        $li = $this->session->userdata('logged_in');
        $admin = $this->session->userdata('usertype');
        if($li == TRUE && $admin == "admin"){
            
         $result = $this->record_model->get_firsthalf();

            $result = $this->record_model->get_secondhalf();

        if ($result) {
            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['firsts'] = $this->record_model->get_secondhalf();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->load->view('Admin/payrolldate2nd', $this->data);  
        }
        else {
            ?>
                    <script type="text/javascript">
                    alert("No referral incentives to be given this month for the 2nd half.");
                    window.location.href='<?php echo base_url(); ?>index.php/adminforms/rpayroll';
                    </script>
                    <?php
        }
    }
        else {
            ?>
                    <script type="text/javascript">
                    alert("Only an admin can access this page");
                    window.location.href='<?php echo base_url(); ?>';
                    </script>
                    <?php
        }
            
    }

    public function updateinfo(){
        $fu = $this->session->userdata('filled_up');
        $id = $this->input->post('ApplicantNumber');
        $this->load->model('record_model');
            
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->updateall($id);

            redirect ('interviewprocess/aforfinal');
                
        }
    }   

    public function updateinfoinitial(){
        $fu = $this->session->userdata('filled_up');
        $id = $this->input->post('ApplicantNumber');
        $this->load->model('record_model');
            
            if($this->input->post()) {
            $data = $this->input->post();   

            $result = $this->record_model->update($id);

            redirect ('interviewprocess/agetdatafrmtable');
                
        }
    }   
	
    public function viewtotal(){
        $this->load->model('record_model');

        $fu = $this->session->userdata('filled_up');
        $pn = $this->input->post('PersonNumber');
            
            if($this->input->post()) {
            $data = $this->input->post();   

            $this->data['logs'] = $this->record_model->logged_in();
            $this->data['firsts'] = $this->record_model->firsthalf();
            $this->data['cntfinalintnotifs'] = $this->record_model->cntfinalintnotif();
            $this->data['cntreferrals'] = $this->record_model->cntreferral();
            $this->data['cntrefs'] = $this->record_model->cntref();
            $this->data['inceninfos'] = $this->record_model->inceninfo();
            $this->data['ttlincgivens'] = $this->record_model->ttlincgiven();
            $this->data['ttalrecvs'] = $this->record_model->ttalrecv();
            $this->load->view('Admin/totalincentives', $this->data);  
        }
            else{
                echo "string";
            }
                
    
    }   

  
}