<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeldaftar extends CI_Model {

function tampildata(){
	$sql = "SELECT* FROM data_user";
	return $this->db->query($sql)->result();
}
function tambah($object){
	return $this->db->insert('data_user', $object);
}
	
}

/* End of file modeldaftar.php */
/* Location: ./application/models/modeldaftar.php */