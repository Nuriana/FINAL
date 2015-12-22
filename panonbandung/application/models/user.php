<?php 
class User extends CI_model {
	function login($email, $password) {
		$this->db->select('email, password');
		$this->db->from('data_user');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return false;
		}
	}
}

 ?>