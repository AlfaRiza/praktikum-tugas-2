<?php 

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$query = mysqli_query($conn, "insert into data_tamu values('', '$nama', '$alamat', '$no_telp')") or die(mysqli_error($conn));


if ($query) {
	header("Location: tampil.php");
}else{
	echo "Oooopsss... antum gagal";
}



?>