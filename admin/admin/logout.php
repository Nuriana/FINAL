<?php
/*
*Corp : Deliman Integra
*Author : Anggara Pratama ,Asep ,Dhany
*comercial software
*/
session_start(); 
$_SESSION = array();
session_destroy();
header("location:index.php");
?>