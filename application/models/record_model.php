<?php

class record_model extends CI_Model {
	public function __constraint() {
	parent:: __constraint();
	
	}
	
    public function fillupinfo($data){
        date_default_timezone_set("Asia/Manila");   
        $this->db->insert('interview', $data);

        return true;
    }

    public function add_newhire($data){
        date_default_timezone_set("Asia/Manila");   

        $AN = $this->input->post('AppNumber');
        $dept = $this->input->post('EDepartment');
        $referrer = $this->input->post('Referrer');
        $job = $this->input->post('JobTitle');


        $this->db->insert('employees', $data);
        $query = $this->db->query("SELECT * FROM jobopenings where Department = '$dept' AND JobTitle = '$job'");

        foreach ($query->result_array() as $row)
        {

            $needed = $row['NoNeeded'];
            $diff = $needed - 1;
            $noneed = array(
            'NoNeeded' => $diff
            );

        if($diff == 0) {
            $this->db->where('Department', $dept);
            $this->db->where('JobTitle', $job);
            $this->db->delete('jobopenings');
        }
        else {
        
        $this->db->where('Department', $dept);
        $this->db->where('JobTitle', $job);
        $this->db->set($noneed);
        $this->db->update('jobopenings');
        }
        }

        $initial = array(
            'Status' => 'Hired' 
        );

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($initial);
        $this->db->update('interview');

        $pwew = array(
            'Status' => 'Hired' 
        );

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($pwew);
        $this->db->update('pendingapplicants');



        return true;
    }

    public function term($data){
        $AN = $this->input->post('PersonNumber');
        date_default_timezone_set("Asia/Manila");   

        $initial = array(
            'AssignStatus' => 'Inactive' 
        );

        $this->db->where('PersonNumber', $AN);
        $this->db->set($initial);
        $this->db->update('employees');

        print_r($AN); exit();
        return true;
    }

    public function inserteduc($data){
        date_default_timezone_set("Asia/Manila");   
        $this->db->insert('educinfo', $data);

        return true;
    }

    public function insertapplication($prev, $apply, $id){
        date_default_timezone_set("Asia/Manila"); 
        $this->db->where('ApplicantNumber', $id);
        $this->db->set($apply);
        $this->db->update('interview');

        $this->db->insert('prevemploy', $prev);

        return;
    }

     public function get_secondhalf(){
       date_default_timezone_set("Asia/Manila"); 
        $today = date("Y-m-d");
        $diffyear = date('Y', strtotime("-6 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-6 months", strtotime($today)));

    
        
        $query = $this->db->query("SELECT DISTINCT `PersonNumber`, `FullName` ,`Referrer`, employees.JobTitle, referrals.Grade, referrals.ReferralIncentive, `HireDate`,`AssignStatus`, `EDepartment`, `EManager`, `First`,`Middle`,`Last`, (referrals.ReferralIncentive / 2) As SecondHalf, DATE_FORMAT(`HireDate`, '%Y') AS Year, DATE_FORMAT(`HireDate`, '%m') AS Month FROM employees join referrals on employees.JobTitle = referrals.JobTitle where employees.Referrer != ' ' HAVING Year = $diffyear AND Month = $diffmonth");

        return $query->result();
        }

        public function get_firsthalf(){
        date_default_timezone_set("Asia/Manila"); 
        $today = date("Y-m-d");
        $diffyear = date('Y', strtotime("-3 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-3 months", strtotime($today)));

    
        
        $query = $this->db->query("SELECT DISTINCT `PersonNumber`, `FullName` ,`Referrer`, employees.JobTitle, referrals.Grade, referrals.ReferralIncentive, `HireDate`,`AssignStatus`, `EDepartment`, `EManager`, `First`,`Middle`,`Last`, (referrals.ReferralIncentive / 2) As FirstHalf, DATE_FORMAT(`HireDate`, '%Y') AS Year, DATE_FORMAT(`HireDate`, '%m') AS Month FROM employees join referrals on employees.JobTitle = referrals.JobTitle where employees.Referrer != ' ' HAVING Year = $diffyear AND Month = $diffmonth");


        return $query->result();
        }

        public function get_date($date){
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');
        $Year = $_POST['Year'];
        $Month = $_POST['Month']; 
        $diff = date('Y-m-d', strtotime("-3 months", strtotime($today)));
        $today = date_default_timezone_set("Asia/Manila"); date("Y-m-d");

        $query1 = $this->db->query("SELECT DISTINCT DATE_FORMAT(`HireDate`, '%Y') AS Year, DATE_FORMAT(`HireDate`, '%M') AS Month, DATE_FORMAT(`HireDate`, '%c') AS Monthnum FROM employees HAVING Year = $year");

        $query = $this->db->query("SELECT `PersonNumber`,`HireDate`, `First`,`Last`,employees.WorkEmail,employees.Referrer, referrals.JobTitle,referrals.Grade,referrals.ReferralIncentive FROM employees JOIN referrals WHERE employees.JobTitle = referrals.JobTitle AND employees.Referrer != ' ' AND YEAR(HireDate) = $Year and MONTH(HireDate) = $Month");

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_data($id){
        $li = $this->session->userdata('PersonNumber');
        $id1 = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('employees');
        $this->db->where('PersonNumber', $li);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_data1($id){
        $li = $this->session->userdata('PersonNumber');
        $id1 = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);


        $query = $this->db->get();
        return $query->result();
    }

        public function get_datafrmtbl(){
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('employees');
        $this->db->where('PersonNumber', $li);

        $query = $this->db->get();
        return $query->result();
    }

    public function getnh_info(){
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->join('educinfo','interview.ApplicantNumber = educinfo.ApplicantNumber' );
        $this->db->join('prevemploy','interview.ApplicantNumber = prevemploy.ApplicantNumber' );
        $this->db->join('pendingapplicants','interview.ApplicantNumber = pendingapplicants.ApplicantNumber' );
        $this->db->where('pendingapplicants.ApplicantNumber', $id);


        $query = $this->db->get();
        return $query->result();
    }

    public function get_second1(){
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('initialresult');
        $this->db->where('initialresult.ApplicantNumber', $id);

        $this->db->from('employees');
        $this->db->where('PersonNumber', $li);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_second2(){
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('initialresult');
        $this->db->where('initialresult.ApplicantNumber', $id);


        $query = $this->db->get();
        return $query->result();
    }

    public function get_second($id){

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('department');
        $this->db->join('initialresult', 'department.PersonNumber = initialresult.ManagerNumber');
        $this->db->where('initialresult.ApplicantNumber', $id);


        $query = $this->db->get();
        return $query->result();
    }

    public function rehire($data){

        $id = $this->input->post('ApplicantNumber');
        
        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('department');
        $this->db->join('initialresult', 'department.PersonNumber = initialresult.ManagerNumber');
        $this->db->where('initialresult.ApplicantNumber', $id);


        $query = $this->db->get();
        return $query->result();
    }

    public function get_dept(){

        $this->db->from('department');

        $query = $this->db->get();
        return $query->result();
    }

    public function ids($id){

        $this->db->from('interview');
        $this->db->where('ApplicantNumber', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_pending(){   
        $li = $this->session->userdata('PersonNumber');
        $id = $this->input->post('ApplicantNumber');

        $this->db->from('interview');
        $this->db->where('interview.ApplicantNumber', $id);

        $this->db->from('educinfo');
        $this->db->where('educinfo.ApplicantNumber', $id);

        $this->db->from('prevemploy');
        $this->db->where('prevemploy.ApplicantNumber', $id);

        $this->db->from('initialresult');
        $this->db->where('initialresult.ApplicantNumber', $id);

        $this->db->from('pendingapplicants');
        $this->db->where('pendingapplicants.ApplicantNumber', $id);

        $this->db->from('employees');
        $this->db->where('PersonNumber', $li);

        $query = $this->db->get();
        return $query->result();
    }

    function insert_initial($data){

        $this->db->insert('initialresult', $data);

        $AN = $this->input->post('ApplicantNumber');
        $man = $this->input->post('DepartmentName');
        $res = $this->input->post('Result');

        $query = $this->db->query("SELECT * FROM department where DepartmentName = '$man'");

        foreach ($query->result_array() as $row)
        {
            $dept = array(
            'ManagerNumber' => $row['PersonNumber'],
            'Manager' => $row['Manager']
            );
        

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($dept);
        $this->db->update('initialresult');
    }

        if ($res == "Failed") {
        $stat = array(
            'Status' => "Initial - Failed"
            );
        

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($stat);
        $this->db->update('interview');
        }

        else {
        $initial = array(
            'Status' => 'For Final Interview' 
        );

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($initial);
        $this->db->update('interview');
    }
        return;

    }

    function insert_final($data){

        $this->db->insert('pendingapplicants', $data);

        $AN = $this->input->post('ApplicantNumber');
        $man = $this->input->post('FinalInterviewer');

        $query = $this->db->query("SELECT * FROM department where Manager = '$man'");

        foreach ($query->result_array() as $row)
        {
            $dept = array(
            'DepartmentName' => $row['DepartmentName'],
            'ManagerNo' => $row['PersonNumber'],
            'Manager' => $man
            );
        

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($dept);
        $this->db->update('pendingapplicants');
    }
        $initial = array(
            'Status' => 'Final Interview' 
        );

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($initial);
        $this->db->update('interview');
        return;

    }


    function logged_in(){
        $li = $this->session->userdata('PersonNumber');
        $this->db->where('PersonNumber', $li);
        $this->db->from('employees');

        $query = $this->db->get();
        return $query->result();
    }

    function referral(){
        $this->db->from('referrals');

        $query = $this->db->get();
        return $query->result();
    }

    function all_employees(){
        $this->db->from('employees');

        $query = $this->db->get();
        return $query->result();
    }

    function cnt_employees(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query('SELECT count(PersonNumber) as countperson FROM employees');
        return $query->result();
    }

    function cntpendappli(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query('SELECT count(Status) as cntpendappli FROM pendingapplicants where status = "For Assessing"');
        return $query->result();
    }


    function cntfinalinter(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query('SELECT count(Status) as cntfinalinter FROM interview where status = "For Final Interview"');
        return $query->result();
    }

    function cntinitialinter(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query('SELECT count(Status) as cntinitialinter FROM interview where status = "For Initial Interview"');
        return $query->result();
    }

    function age(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query("SELECT (DATEDIFF(CURRENT_DATE, STR_TO_DATE(Birthday, '%Y-%m-%d'))/365) as age FROM `interview`");
        return $query->result();
    }

    function cntfinalintnotif(){
        date_default_timezone_set("Asia/Manila");
    $today = date("Y/m/d");
        $query = $this->db->query("SELECT count(date_added) as cntfinalintnotif FROM pendingapplicants where date_added = '$today'");
        return $query->result();
    }

    function cntmanageronly(){
        $li = $this->session->userdata('PersonNumber');
        date_default_timezone_set("Asia/Manila");

        $today = date("Y-m-d");
        $query = $this->db->query("SELECT count(initialresult.date_added) as cntmanageronly FROM initialresult join employees on initialresult.ManagerNumber = employees.PersonNumber where initialresult.date_added = '$today' and employees.PersonNumber = '$li'");
        return $query->result();
    }

    function manageronly(){
        $li = $this->session->userdata('PersonNumber');
        date_default_timezone_set("Asia/Manila");

        $today = date("Y/m/d");
        $query = $this->db->query("SELECT * FROM initialresult join employees on initialresult.ManagerNumber = employees.PersonNumber where initialresult.date_added = '$today' and employees.PersonNumber = $li");
        return $query->result();
    }

    function cntreferral(){
        date_default_timezone_set("Asia/Manila");
        $today = date("Y-m-d");
        $diffyear = date('Y-m-d', strtotime("-3 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-3 months", strtotime($today)));
  
        $query = $this->db->query("SELECT count(HireDate) as cntreferral FROM employees where HireDate = '$diffyear'");
        return $query->result();
    }

    function get_referraltoday(){
        date_default_timezone_set("Asia/Manila");
        $today = date("Y-m-d");
        $diffyear = date('Y-m-d', strtotime("-3 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-3 months", strtotime($today)));
  
        $query = $this->db->query("SELECT * FROM employees join referrals on employees.JobTitle=referrals.JobTitle where HireDate = '$diffyear'");
        return $query->result();
    }

    function job(){
        date_default_timezone_set("Asia/Manila");
        $today = date("Y-m-d");
        
        $query = $this->db->query("SELECT * FROM jobopenings join department on jobopenings.Department = department.DepartmentName where jobopenings.NoNeeded > '0'");
        return $query->result();
    }

    function addjob($data){
        $id = $this->input->post('ApplicantNumber');
        

        $this->db->insert('jobopenings', $data);

        $man = $this->input->post('Department');

        $query = $this->db->query("SELECT * FROM department where DepartmentName = '$man'");
        $job = $this->db->query("SELECT * FROM jobopenings order by JobId DESC Limit 1");

         foreach ($job->result_array() as $row)
        {

            $jobid = $row['JobId'];
    }

        foreach ($query->result_array() as $row)
        {

            $dept = array(
            'DepartmentID' => $row['DepartmentID']
            );
        

        $this->db->where('JobId', $jobid);
        $this->db->set($dept);
        $this->db->update('jobopenings');
    }

        return true;
    }

     public function updateall($id){
        $id = $this->input->post('ApplicantNumber');

        date_default_timezone_set("Asia/Manila");
        
        $array = array(
            'FirstName' => $this->input->post('FirstName'),
            'MiddleName' => $this->input->post('MiddleName'),
            'LastName' => $this->input->post('LastName'),
            'AddressLine' => $this->input->post('AddressLine'),
            'City' => $this->input->post('City'),
            'Email' => $this->input->post('Email'),
            'Gender' => $this->input->post('Gender'),
            'Contact' => $this->input->post('Contact'),
            'Birthday' => $this->input->post('Birthday')
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($array);
        $this->db->update('interview');

        $educ = array(
            'Tschool' => $this->input->post('Tschool'),
            'Tdegree' => $this->input->post('Tdegree'),
            'Tfrom' => $this->input->post('Tfrom'),
            'Tto' => $this->input->post('Tto'),
            'Tgraduated' => $this->input->post('Tgraduated')
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($educ);
        $this->db->update('educinfo');

        $prev = array(
                'ApplicantNumber' => $id, 
                'Company' => $this->input->post('Company'), 
                'Job' => $this->input->post('Job'), 
                'Duration' => $this->input->post('Duration')

            );

        $apply = array(
                'ApplicantNumber' => $id, 
                'Desired' => $this->input->post('Desired'), 
                'Referred' => $this->input->post('Referred'), 
                'Employee' => $this->input->post('Employee'),
                
            );

         $initial = array(
                'ApplicantNumber' => $id, 
                'ApplicantName' => $this->input->post('ApplicantName'),
                'Email' => $this->input->post('Email'),
                'Gender' => $this->input->post('Gender'),
                'Contact' => $this->input->post('Contact'),
                'Birthday' => $this->input->post('Birthday'),
                'Address' => $this->input->post('Address')
                
            );
            
            $this->db->where('ApplicantNumber', $id);
            $this->db->set($prev);
            $this->db->update('prevemploy');  

            $this->db->where('ApplicantNumber', $id);
            $this->db->set($initial);
            $this->db->update('initialresult');  

            $this->db->where('ApplicantNumber', $id);
            $this->db->set($apply);
            $this->db->update('interview');    
        
        return true;

    }

    public function update($id){
        $id = $this->input->post('ApplicantNumber');

        date_default_timezone_set("Asia/Manila");
        
        $array = array(
            'FirstName' => $this->input->post('FirstName'),
            'MiddleName' => $this->input->post('MiddleName'),
            'LastName' => $this->input->post('LastName'),
            'AddressLine' => $this->input->post('AddressLine'),
            'City' => $this->input->post('City'),
            'Email' => $this->input->post('Email'),
            'Gender' => $this->input->post('Gender'),
            'Contact' => $this->input->post('Contact'),
            'Birthday' => $this->input->post('Birthday')
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($array);
        $this->db->update('interview');

        $educ = array(
            'Tschool' => $this->input->post('Tschool'),
            'Tdegree' => $this->input->post('Tdegree'),
            'Tfrom' => $this->input->post('Tfrom'),
            'Tto' => $this->input->post('Tto'),
            'Tgraduated' => $this->input->post('Tgraduated')
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($educ);
        $this->db->update('educinfo');

        $prev = array(
                'ApplicantNumber' => $id, 
                'Company' => $this->input->post('Company'), 
                'Job' => $this->input->post('Job'), 
                'Duration' => $this->input->post('Duration')

            );

        $apply = array(
                'ApplicantNumber' => $id, 
                'Desired' => $this->input->post('Desired'), 
                'Referred' => $this->input->post('Referred'), 
                'Employee' => $this->input->post('Employee'),
                
            );

            
            $this->db->where('ApplicantNumber', $id);
            $this->db->set($prev);
            $this->db->update('prevemploy');  


            $this->db->where('ApplicantNumber', $id);
            $this->db->set($apply);
            $this->db->update('interview');    
        
        return true;

    }


    function withdrawfinal($id){
        $array = array(
            'Status' => "Final - Withdrawn"
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($array);
        $this->db->update('interview');

        return true;
    }

    public function cntref(){

        $nm = $this->input->post('Name');

        $query = $this->db->query("SELECT count(Referrer) as cntreferrer FROM employees where Referrer = '$nm'");
        
        return $query->result();
    }

    public function inceninfo(){

        $nm = $this->input->post('Name');

    $query = $this->db->query("SELECT Distinct `PersonNumber`, `FullName`, `HireDate`, employees.`JobTitle`, `EDepartment` FROM employees where FullName = '$nm'");

    return $query->result();
    }

    public function ttlincgiven(){

        $nm = $this->input->post('Name');

        date_default_timezone_set("Asia/Manila"); 
        $today = date("Y-m-d");
        $diffyear = date('Y', strtotime("-4 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-4 months", strtotime($today)));
        
        $query = $this->db->query("SELECT DISTINCT SUM(referrals.ReferralIncentive) As Ttlgiven FROM employees join referrals on employees.JobTitle = referrals.JobTitle where employees.Referrer != ' ' And employees.Referrer = '$nm'");


        return $query->result();

    }

    public function firsthalf(){
        $nm = $this->input->post('Name');

        date_default_timezone_set("Asia/Manila"); 
        $today = date("Y-m-d");
        $diffyear = date('Y', strtotime("-3 months", strtotime($today)));
        $diffmonth = date('m', strtotime("-3 months", strtotime($today)));
        $addyear = date('Y', strtotime("-6 months", strtotime($today)));
        $addmonth = date('m', strtotime("-6 months", strtotime($today)));

   
        $query = $this->db->query("SELECT DISTINCT SUM((referrals.ReferralIncentive / 2)) As FirstHalf, DATE_FORMAT(`HireDate`, '%Y') AS Year, DATE_FORMAT(`HireDate`, '%m') AS Month FROM employees join referrals on employees.JobTitle = referrals.JobTitle where employees.Referrer != ' '  And employees.Referrer = '$nm' HAVING Year = $diffyear AND Month = $diffmonth OR Year = $addyear AND Month = $addmonth");


        return $query->result();
        }   



    public function ttalrecv(){
       $pn =$this->input->post('Name');
          date_default_timezone_set("Asia/Manila"); 
        $today = date("F Y");
        $date = date('F Y', strtotime("+4 months", strtotime($today)));

         $query =$this->db->query("SELECT DISTINCT HireDate, referrals.ReferralIncentive, SUM((referrals.ReferralIncentive / 2)) As FirstHalf FROM employees join referrals on employees.JobTitle = referrals.JobTitle WHERE Referrer != ' ' AND Referrer = '$pn'");  

       

       foreach ($query->result_array() as $row)
        {

            $hiredate = $row['HireDate'];
            $inc = $row['ReferralIncentive'];
        }  

        $date = date('F Y', strtotime("+3 months", strtotime($hiredate)));
        $date2 = date('F Y', strtotime("+6 months", strtotime($hiredate)));

        if ($date >= $today){

      $query1 =$this->db->query("SELECT DISTINCT `zero` As treceive FROM incentives");  
      $pwew = $query1->result();

       return $pwew;

        }

        else if ($date <= $today) {
       $query2 =$this->db->query("SELECT SUM(referrals.ReferralIncentive / 2) As treceive FROM employees join referrals on employees.JobTitle = referrals.JobTitle WHERE Referrer != ' ' AND Referrer = '$pn' AND HireDate < '$date'"); 

        $hays = $query2->result();

        return $hays;

        }



        }   

}
?>