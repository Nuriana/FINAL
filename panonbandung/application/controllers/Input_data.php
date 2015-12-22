<?php 
defined('BASEPATH') OR exit ('nothing');
/**
* 
*/

class Input_data extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('modelhome'));
		if ($this->session->userdata('email')== FALSE) {
			redirect(base_url('login'),'refresh');
		}
	}
	function index()
	{
		$data=array(
			'tampildata'=>$this->modelhome->tampildata(),
			'kategori'=>$this->modelhome->getKategori(),
			'lokasi'=>$this->modelhome->getLokasi(),
		);
		$this->load->view('input_data', $data);
	}
	function upload_data(){
		$form = array(
			'id_user' => '1',
			'id_kategori' => $this->input->post('id_kategori'),
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'id_lokasi' => $this->input->post('id_lokasi'),
			'status' => '1',
		);
		$this->modelhome->insertItem($form);
		$id_item = $this->db->insert_id();
		$img_config = array(
                                'upload_path' => 'foto/',
                                'allowed_types' => 'jpg|png',
                                'max_size' => '20000',
                                'overwrite' => FALSE,
                            );
		$this->upload->initialize($img_config);
		if (!$this->upload->do_upload('foto')) {
			echo "Upload Gagal";
		}else{
			$data = array(
               'upload_data' => $this->upload->data() ,
            );
			$data_item_foto = array(
				'id_item' => $id_item,
				'nama_foto' => $data['upload_data']['file_name'],
				'path' => 'foto/',
			);
			$this->modelhome->insertItemPict($data_item_foto);
	redirect('home','refresh');
		}
		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('home','refresh');
	}
}
?>