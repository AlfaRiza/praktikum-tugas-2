<?php 

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$query = mysqli_query($conn,"UPDATE data_tamu SET nama='$nama',alamat='$alamat',no_telp='$no_telp' WHERE id='$id'") or die(mysqli_error($conn));
if($query){
    header("Location: tampil.php");
}else {
    echo "Oooopsss... antum gagal";
}


?>