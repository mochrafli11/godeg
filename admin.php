<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">SELAMAT DATANG DI RESTO SAYA</h1>
    <a href="tambah.php">tambahkan</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama Menu</th>
        <th>Kode Menu</th>
        <th>Harga</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query( $koneksi, "SELECT * FROM menu");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['id']; ?></td>
            <td><?php echo $d['nama_menu']; ?></td>
            <td><?php echo $d['kode_menu']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
    }
    ?>
    
    </table>
</body>
</html>