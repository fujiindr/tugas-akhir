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
$laundry = new laundry();
foreach ($laundry->show($_GET['id']) as $data) {
    $id = $data['id'];
    $id_karyawan = $data['id_karyawan'];
    $kode_pesanan = $data['kode_pesanan'];
    $tanggal = $data['tanggal'];
    $kembali = $data['kembali'];
    $nama = $data['nama'];
    $paket = $data['paket'];
    $berat = $data['berat'];
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
                    <td><input type="text" name="id_karyawan" value="<?php echo $id_karyawan; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Kode Pesanan</td>
                    <td><input type="text" name="kode" value="<?php echo $kode_pesanan; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
                </tr>
                 <tr>
                    <td>Tanggal Pengembalian</td>
                    <td><input type="date" name="kembali" value="<?php echo $kembali; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Jenis Paket</td>
                    <td><?php
                        $laundry = new laundry();
                        ?>
                    <input type="text" name="nama" value="<?php echo $data ['paket']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="berat" value="<?php echo $berat; ?>" readonly></td>
                </tr>
                 </table>
    </fieldset>
</body>

</html>
