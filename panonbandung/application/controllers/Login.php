<?php 
defined('BASEPATH') OR exit ('nothing');
/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('modelhome','modellogin'));
	}
	function index($notifikasi=NULL)
	{
		$object = array(
			'notifikasi' => $notifikasi,
		);
		$this->load->view('login',$object);
	}
	function send(){
		$form = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);
		$checkUser = $this->modellogin->checkUser($form);
		$resultUser = $this->modellogin->resultUser($form);
		if ($checkUser == TRUE) {
			foreach ($resultUser as $res) {
				$sess = array(
					'email' => $res->email,
					'password' => $res->pasword, 
				);
				$this->session->set_userdata($sess);
				redirect(base_url(),'refresh');
			}
		}else{
			$notifikasi = 'Akun Tidak Tersedia';
			$this->index($notifikasi);
		}
	}
}
?>