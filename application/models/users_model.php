<?php

class users_model extends CI_Model {
	public function __constraint() {
	parent:: __constraint();
	
	}
	
	// Read data using username and password
	public function login($username, $password) {
		$this->db->where('Username',$username);
        $result = $this->db->get('users');
        
        $result = $result->result_array();
        

        
        if(strcmp($result[0]['Password'], $password) != 0) {
            return FALSE;
                        
        }
        
        else {   
        
        return $result;
        
        }   
	}

	public function history(){
        date_default_timezone_set("Asia/Manila");
        $history = array(
        'PersonNumber' => $this->session->userdata('PersonNumber'),
        'date_login' => date("Y-m-d h:i:sa"),
    );
        $this->db->insert('history', $history);
    }

    public function history_out(){
        $this->db->select('history_id');
        $this->db->from('history');
        $query = $this->db->get();
        $row = $query->last_row();
        $array = json_decode(json_encode($row), True);
        $a = $array['history_id'];

        date_default_timezone_set("Asia/Manila");
        $history = array(
            'date_Logout' => date("Y-m-d h:i:s"),
        );

        $this->db->where('history_id', $a);
        $this->db->update('history', $history);
    }
	
}
?>