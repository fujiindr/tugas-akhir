<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$karyawan = new karyawan();
foreach ($karyawan->show($_GET['id']) as $data) {
    $id_kar = $data['id_kar'];
    $nama = $data['nama'];
}
?>
 <center>
        <a href="data.php">Data Laundry | </a>
        <a href="create.php">Tambah Data Laundry | </a>
        <a href="buat.php">Tambah Data Karyawan | </a>
        <a href="tabel.php">Data Karyawan | </a>
        <a href="tabel_pelanggan.php">Pelanggan</a>
    </center>
    <fieldset>
        <legend>Detail Data laundry</legend>
        <table>
                <tr>
                    <td>ID Karyawan</td>
                    <td><input type="text" name="id_kar" value="<?php echo $id_kar; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Karyawan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                 </table>
    </fieldset>
</body>

</html>
