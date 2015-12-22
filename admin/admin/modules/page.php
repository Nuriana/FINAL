<?php

switch($_GET['page']){

	case"tempat":
	include"modules/data_tempat/index.php";
	break;
	
	case"tambah_data":
	include"modules/input_tempat/index.php";
	break;

	case"data_tamu":
	include"modules/data_tamu/index.php";
	break;
	}

?>