
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_menu = $_POST['nama_menu'];
$kode = $_POST['kode_menu'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update menu set nama_menu='$nama_menu', kode_menu='$kode', harga='$harga' where id='$id'");
 

header("location:edit.php");
 
?>