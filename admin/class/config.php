<?php
/*
*
*KONFIGURASI SISTEM
*
*/
class db_config
{
	/*DATABASE*/
	protected $mysqli;
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "panonbandung";
    public $location_zone = "Asia/Jakarta"; 
     
    public function __construct() {
        $this->location_zone;
        $this->mysqli=new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die ($this->mysqli->error);
        return $this->mysqli;
    }
    
    public function time_zone() {
        return date_default_timezone_set($this->location_zone);
    } 

    public function getLink() {
        return $this->mysqli;
    }
     
    public function query($query) {
        return $this->mysqli->query($query);
    }
     
    function __destruct() {
        $this->mysqli->close();
    }
}
?>