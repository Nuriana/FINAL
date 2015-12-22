<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modellogin extends CI_Model {

	function checkUser($data){
		$data = (array)$data;
		$sql = "SELECT * FROM data_user WHERE email = ?";
		return $this->db->query($sql ,array($data['email']))->num_rows();
	}
	function resultUser($data){
		$data = (array)$data;
		$sql = "SELECT * FROM data_user WHERE email = ? AND pasword = ?";
		return $this->db->query($sql ,array($data['email'],md5($data['password'])))->result();
	}
}

/* End of file modellogin.php */
/* Location: ./application/models/modellogin.php */