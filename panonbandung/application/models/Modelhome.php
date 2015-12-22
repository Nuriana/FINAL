<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelhome extends CI_Model {
function tampildata()
{
$sql = "SELECT * FROM data_item 
inner join kategori 
on kategori.id_kategori= data_item.id_kategori
inner join lokasi 
on lokasi.id_lokasi= data_item.id_lokasi
inner join data_user 
on data_user.id_user= data_item.id_user 
INNER JOIN data_item_foto
on data_item_foto.id_item= data_item.id_item
WHERE data_item.status = '1' 
ORDER BY data_item.tgl_input DESC";
return $this->db->query($sql)->result();

}
function tampildetail($data){
	$sql = "SELECT * FROM data_item 
inner join kategori 
on kategori.id_kategori= data_item.id_kategori
inner join lokasi 
on lokasi.id_lokasi= data_item.id_lokasi
inner join data_user 
on data_user.id_user= data_item.id_user 
INNER JOIN data_item_foto
on data_item_foto.id_item= data_item.id_item
WHERE data_item.status = ? AND data_item.id_item = ? 
ORDER BY data_item.tgl_input DESC LIMIT 0,6";
return $this->db->query($sql,array('1',$data))->result();
}
	
function getKategori(){
	$sql = "SELECT* FROM kategori";
	return $this->db->query($sql)->result();
}
function getLokasi(){
	$sql = "SELECT* FROM lokasi";
	return $this->db->query($sql)->result();
}
function insertItem($object){
	return $this->db->insert('data_item', $object);
}
function insertItemPict($object){
	return $this->db->insert('data_item_foto', $object);
}

}

/* End of file modelHome.php */
/* Location: ./application/models/modelHome.php */