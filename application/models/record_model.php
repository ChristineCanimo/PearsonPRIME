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

    public function get_data(){
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

    public function get_second(){
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

    public function get_dept(){

        $this->db->from('department');

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
        $man = $this->input->post('Manager');

        $query = $this->db->query("SELECT * FROM department where Manager = '$man'");

        foreach ($query->result_array() as $row)
        {
            $dept = array(
            'DepartmentName' => $row['DepartmentName']
            );
        

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($dept);
        $this->db->update('initialresult');
    }
        $initial = array(
            'Status' => 'Initial Interview' 
        );

        $this->db->where('ApplicantNumber', $AN);
        $this->db->set($initial);
        $this->db->update('interview');
        return;

    }

    function insert_final($data){

        $this->db->insert('pendingapplicants', $data);

        $AN = $this->input->post('ApplicantNumber');
        $man = $this->input->post('Manager');

        $query = $this->db->query("SELECT * FROM department where Manager = '$man'");

        foreach ($query->result_array() as $row)
        {
            $dept = array(
            'DepartmentName' => $row['DepartmentName']
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
        $query = $this->db->query('SELECT count(Status) as cntpendappli FROM pendingapplicants where status = "Pending"');
        return $query->result();
    }

    function cntinter(){
    date_default_timezone_set("Asia/Manila");
        $query = $this->db->query('SELECT count(Status) as cntinter FROM interview where status = "Pending"');
        return $query->result();
    }
}
?>