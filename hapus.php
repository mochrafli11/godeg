<?php

     include 'koneksi.php';

     $id = $_GET['id'];

     mysqli_query($koneksi, "delete from menu where id='$id'");

     header("location:admin.php");

?>