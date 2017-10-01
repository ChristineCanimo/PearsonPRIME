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

    public function inserteduc($data){
        date_default_timezone_set("Asia/Manila");   
        $this->db->insert('educinfo', $data);

        return true;
    }

    public function insertinitial($data){
        date_default_timezone_set("Asia/Manila");   
        $this->db->insert('initial', $data);

        return true;
    }

    public function get_info(){
        $this->db->from('interview');
        $this->db->limit(1);
        $this->db->order_by('ApplicantNumber', 'DESC');
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

    public function updateinfo($array, $id){
        $id = $this->input->post('ApplicantNumber');

        date_default_timezone_set("Asia/Manila");
        
        $array = array(
            'FirstName' => $this->input->post('FirstName'),
            'MiddleName' => $this->input->post('MiddleName'),
            'LastName' => $this->input->post('LastName'),
            'Address' => $this->input->post('Address'),
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
    public function updateeduc($data, $info){
       $id = $this->input->post('ApplicantNumber');

        date_default_timezone_set("Asia/Manila");
        
        $array = array(
            'Tschool' => $this->input->post('Tschool'),
            'Tdegree' => $this->input->post('Tdegree'),
            'Tfrom' => $this->input->post('Tfrom'),
            'Tto' => $this->input->post('Tto'),
            'Tgraduated' => $this->input->post('Tgraduated'),
            'Sschool' => $this->input->post('Sschool'),
            'Sfrom' => $this->input->post('Sfrom'),
            'Sto' => $this->input->post('Sto'),
            'Sgraduated' => $this->input->post('Sgraduated'),
            'Pschool' => $this->input->post('Pschool'),
            'Pfrom' => $this->input->post('Pfrom'),
            'Pto' => $this->input->post('Pto'),
            'Pgraduated' => $this->input->post('Pgraduated'),
            'Company' => $this->input->post('Company'),
            'Position' => $this->input->post('Position'),
            'Duration' => $this->input->post('Duration')
                );  

        $this->db->where('ApplicantNumber', $id);
        $this->db->set($array);
        $this->db->update('educinfo');
        
        $this->db->where('ApplicantNumber', $id);
        $this->db->from('initial');
        $query = $this->db->get();
        return $query->result();

    }
}
?>