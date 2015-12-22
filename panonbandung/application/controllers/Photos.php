<?php 
defined('BASEPATH') OR exit ('nothing');
/**
* 
*/
class Photos extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('modelhome'));
	}
	function index()
	{
		$data=array(
			'tampildata'=>$this->modelhome->tampildata(),
		);
		$this->load->view('photos',$data);	
	}
}
