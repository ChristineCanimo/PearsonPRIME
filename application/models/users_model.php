<?php

class users_model extends CI_Model {
	public function __constraint() {
	parent:: __constraint();
	
	}
	
			// Insert registration data in database
		public function registration_insert($data) {

		// Query to check whether username already exist or not
		$condition = "Username =" . "'" . $data['Username'] . "'";
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get(); 
		if ($query->num_rows() == 0) {

		// Query to insert data in database
		$this->db->insert('users', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		}
		} else {
		return false;
		}
		}

		public function check_user_exists($username){
        $this->db->where('Username',$username);
        $this->db->from('users');
        $query = $this->db->get();
        if($query->num_rows() >0){
            return $query->result();
        }else{
            return $query->result();
 //           return false;
        }

    }

	// Read data using username and password
	public function login($username, $password) {

		$this->db->where('Username',$username);
        $result = $this->db->get('employees');
        
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

    public function admininfo(){
        $li = $this->session->userdata('logged_in');
        $pn = $this->session->userdata('PersonNumber');

        $this->db->where('PersonNumber', $li);
        $query = $this->db->get('employees');

        return $query->result(); 

    }
	
}
?>