<?php  
	/**
	* 
	*/
	include"config.php";
	class eshopper
	{
		public function __construct(db_config $db) {
       		$this->mysqli = $db->getLink();
    	}
        public function insert_id(){
            return $this->mysqli->insert_id;  
        }
        function login($username, $password)
    {
        if ((empty($username)) && (empty($password))) {
            echo '<div class="alert alert-danger" id="alert">
                    <strong>email</strong> & <strong>Pasword</strong> required
                </div>';
        }
        else
        if (empty($username)) {
            echo '<div class="alert alert-danger" id="alert">
                    <strong>Email</strong> required
                </div>';
        }
        else
        if (empty($password)) {
            echo '<div class="alert alert-danger" id="alert">
                    <strong>Password</strong> required
                </div>';
        }
        else {
            $pass = md5($password);
            $query = $this->mysqli->query("SELECT * FROM admin WHERE  email='$username' AND pasword='$pass'");
            $count = $query->num_rows;
            $result = $query->fetch_array(MYSQLI_BOTH);
            if ($username != $result['email'] && $password != $result['pasword']) {
                echo '<div class="alert alert-danger" id="alert">
                        Wrong <strong>email</strong> or <strong>pasword</strong> 
                     </div>';
            }
            else {
                if (($count == TRUE)) {
                    $_SESSION['Us3Rn4M31'] = $username;
                    $_SESSION['p4swW0Rd1'] = $password;
                    $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]" . " - " . $username;
                    file_put_contents('login.log', $line . PHP_EOL, FILE_APPEND);
                    header("location: index.php?page=home");
                    
                }
            }
        }
    }
	 function get_all_data(){
            $sql="SELECT * FROM data_item 
            INNER JOIN kategori
            ON kategori.id_kategori = data_item.id_kategori
            INNER JOIN lokasi
            ON lokasi.id_lokasi = data_item.id_lokasi  ORDER BY tgl_input DESC";
            $query = $this->mysqli->query($sql)OR DIE ("ERROR IN SQL".$sql);
            //$result = $query->fetch_array(MYSQLI_BOTH);
            //$total=0;
                foreach ($query as $result) {
                echo'<tr>
                        <td>'.$result['id_item'].'</td>
                        <td>'.$result['judul'].'</td>
                        <td>'.$result['nama_kategori'].'</td>
                        <td>'.substr($result['deskripsi'],0,20).'</td>
                        <td>'.$result['tgl_input'].'</td>
                        <td>'.$result['nama_lokasi'].'</td>
                        </tr>
                    ';
            }
            $result++;

                
        }
    
    function getCategory(){
        echo "<select name='nama_lokasi' id='' class='form-control'>";
            $query = $this->mysqli->query("SELECT * FROM lokasi");
            foreach ($query as $result) {
            
            echo '<option value="'.$result['id_lokasi'].'">'.$result['nama_lokasi'].'</option>';

            } 
        echo "</select>";
    }
    function kategori(){
echo "<select name='id_kategori' id='' class='form-control'>";
            $query = $this->mysqli->query("SELECT * FROM kategori");
            foreach ($query as $result) {
            
            echo '<option value="'.$result['id_kategori'].'">'.$result['nama_kategori'].'</option>';

            } 
        echo "</select>";

    }
     function insertBarang($judul,$deskripsi,$kategori,$gambar,$gambar_file){
        
            $query = $this->mysqli->query("INSERT INTO item (judul,deskripsi,id_kategori) VALUES('$judul','$deskripsi','$kategori')");      
            $id =$this->mysqli->insert_id;
            $upload_directory = "../kampus/panonbandung/foto/";
            $upload_path = "foto/";
            $name_file = $gambar;
            $go_to = $upload_directory;
            $uploading  =   move_uploaded_file($gambar_file,$go_to.$name_file);
            $query1 = $this->mysqli->query("INSERT INTO data_item_foto (id_item,nama_foto,path) VALUES('$id','$name_file','$upload_path')");
            echo '<meta http-equiv="refresh" content="0; url='.$_SERVER['HTTP_REFERER'].'" />';

    }

}