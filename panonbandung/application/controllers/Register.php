<?php 
defined('BASEPATH') OR exit ('nothing');
/**
* 
*/
class Register extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('modeldaftar'));
	}
	function index()
	{
		$data=array(
			'tampildata'=>$this->modeldaftar->tampildata(),
		);
		$this->load->view('register',$data);
}
	function regist()
	{
			$form = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pasword' =>md5($this->input->post('pasword')) ,
			'status' => '1',
		);
		$this->modeldaftar->tambah($form);
		$id_item = $this->db->insert_id();
	redirect('home','refresh');
	}
	
}	

