<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db = "data_tamu";

$conn = new mysqli($hostname, $username, $password, $db);

if($conn->connect_error){
	die('maaf koneksi gagal'.$connect->error);
}

?>