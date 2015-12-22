<?php if ( ! defined('BASEPATH')) exit('tidak bisa masuk');
class Perifikasi extends CI_Controler {
	 function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}
	function index() {
		$this->load->library('form_validation ');
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
	
		if($this->form_validation->run()== FALSE) {
			$this->load->view('login');
		}
		else {
			redirect('input_data','refresh');
		}
	}
	function check_database($password){
		$email = $this->input->post('email');
		$result = $this->user->login($email, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				'email' => $row->email,
				'password' => $row->password
			);
			$this->session->set_userdata('login', $sess_array);
		}
		returt TRUE;
	}
	else{
		$this->form_validation->set_message('check_database', 'Invalid email or password');
		return false;
	}
}
}
?>