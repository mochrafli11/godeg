<?php
// koneksi data base
include 'koneksi.php';

// menangkat data yang di kirim dari form
$id = $_POST['id'];
$nama_menu = $_POST['nama_menu'];
$kode = $_POST['kode_menu'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"insert into menu values ('$id','$nama_menu','$kode','$harga')");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>