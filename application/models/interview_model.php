<?php

class interview_model extends CI_Model {
	public function __constraint() {
	parent:: __constraint();
	
	}
	
    public function fillupinfo($data){
        date_default_timezone_set("Asia/Manila");   
        $this->db->insert('interview', $data);

        return true;
    }

    public function match($data){
        date_default_timezone_set("Asia/Manila");   
        $fn = $this->input->post('FirstName');  
        $mn = $this->input->post('MiddleName');  
        $ln = $this->input->post('LastName');  
        $bd = $this->input->post('Birthday');

        $this->db->from('interview');
        $this->db->like('FirstName', $fn);
        $this->db->or_like('MiddleName', $mn);
        $this->db->or_like('LastName', $ln);
        $this->db->or_like('Birthday', $bd);


        $query = $this->db->get();
        return $query->result();
    }

    public function selectmatch($data){
        date_default_timezone_set("Asia/Manila");   
        $fn = $this->input->post('FirstName'); 
        $an = $this->input->post('ApplicantNumber');  
        $mn = $this->input->post('MiddleName');  
        $ln = $this->input->post('LastName');  
        $bd = $this->input->post('Birthday');

        $this->db->from('interview');
        $this->db->where('ApplicantNumber', $an);

        $query = $this->db->get();
        return $query->result();
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

    public function get_info(){
        $this->db->from('interview');
        $this->db->limit(1);
        $this->db->order_by('ApplicantNumber', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getm(){
        $an = $this->input->post('ApplicantNumber');
        $this->db->from('interview'); 
        $this->db->where('ApplicantNumber', $an);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_am(){
        $an = $this->input->post('ApplicantNumber');
        $this->db->from('prevemploy');
        $this->db->where('ApplicantNumber', $an);
        $query = $this->db->get();
        return $query->result();

    }
    public function get_pending(){
        $this->db->from('initial');
        $this->db->join('interview','initial.ApplicantNumber=interview.ApplicantNumber');
        $this->db->where('PassFail', '1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_educ(){
        $this->db->from('educinfo');
        $this->db->limit(1);
        $this->db->order_by('ApplicantNumber', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateinfo($id){
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
        
        $this->db->where('ApplicantNumber', $id);
        $this->db->from('educinfo');
        $query = $this->db->get();
        return $query->result();

    }

    public function sessioneduc(){
        $id = $this->session->userdata('ApplicantNumber');
        $this->db->where('ApplicantNumber', $id);
        $this->db->from('educinfo');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateeduc($data){
        $id = $this->input->post('ApplicantNumber');

        date_default_timezone_set("Asia/Manila");
        
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
        
        $this->db->where('prevemploy.ApplicantNumber', $id);
        $this->db->where('interview.Desired !=', 'NULL');
        $this->db->from('prevemploy');
        $this->db->join('interview', 'interview.ApplicantNumber = prevemploy.ApplicantNumber');
        $query = $this->db->get();  
        return $query->result();

    }

        public function updateapplication(){
            $id = $this->input->post('ApplicantNumber');

            date_default_timezone_set("Asia/Manila");
            
            $prev = array(
                'ApplicantNumber' => $id, 
                'Company' => $this->input->post('Company'), 
                'Job' => $this->input->post('Job'), 
                'Duration' => $this->input->post('Duration')

            );

            $apply = array(
                'ApplicantNumber' => $id, 
                'Desired' => $this->input->post('PositionDesired'), 
                'Referred' => $this->input->post('Referred'), 
                'Employee' => $this->input->post('Employee'),
                
            );
            
            $this->db->where('ApplicantNumber', $id);
            $this->db->set($prev);
            $this->db->update('prevemploy');  

            $this->db->where('ApplicantNumber', $id);
            $this->db->set($apply);
            $this->db->update('interview');    
        }

    public function get_application(){
        $this->db->from('prevemploy');
        $this->db->limit(1);
        $this->db->order_by('ApplicantNumber', 'DESC');
        $query = $this->db->get();
        return $query->result();

    }

    public function get_employees(){
        $this->db->from('employees');
        $query = $this->db->get();
        return $query->result();

    }

    public function cancel($data){
        $id = $this->input->post('ApplicantNumber');

        $this->db->where('ApplicantNumber', $data);
        $this->db->delete('educinfo'); 

        $this->db->where('ApplicantNumber', $data);
        $this->db->delete('interview'); 
        return;

    }

    


}
?>