<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan Mysqli</title>
</head>
<body>
    
   <h2>CRUD NAMA MENU MAKANAN</h2>
   <br/>
   <a href="login.php">kembali</a>
   <br/>
   <br/>
   <h3>TAMBAH DATA MENU</h3>
   <form method="post" action="tambahaksi.php">
    <table>
        <tr>
            <td>id</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama_Menu</td>
            <td><input type="nama_menu" name="nama_menu"</td>
        </tr>
        <tr>
            <td>Kode_Menu</td>
            <td><input type="kode_menu" name="kode_menu"</td
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="harga" name="harga"</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
   </form>
</body>
</html>