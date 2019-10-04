<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "Delete from data_tamu where id=$id");

if($query){
	header("Location: tampil.php");
}else{
	echo "Data gagal dihapus";
}

?>