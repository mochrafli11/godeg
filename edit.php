<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<a href="admin.php">Lihat Semua Data</a>
	<br/>
	<h3>Edit data</h3>
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
    $data1 = mysqli_query($koneksi, "SELECT * FROM menu WHERE id ='$id' ");
	while($d= mysqli_fetch_array($data1)){
	?>
	<form action="admin.php" method="post">		
		<table>
			<tr>
				<td>Nama_Menu</td>
				<td>
					<input type="text" name="nama_menu" value="<?php echo $d['nama_menu'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Kode_Menu</td>
				<td><input type="text" name="kode_menu" value="<?php echo $d['kode_menu'] ?>"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $d['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>