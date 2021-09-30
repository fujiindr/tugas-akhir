<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$karyawan = new karyawan();
foreach ($karyawan->edit($_GET['id']) as $data) {
    $id_kar = $data['id_kar'];
    $nama = $data['nama'];
}
?>
    <fieldset>
        <legend>Edit Data laundry</legend>
        <form action="proses_karyawan.php" method="post">
            <input type="text" name="aksi" value="update">
            <input type="text" name="id_kar" value="<?php echo $id_kar; ?>">
            <table>
                <tr>
                    <td>ID Karyawan</td>
                    <td><input type="text" name="id_kar" value="<?php echo $id_kar; ?>" required></td>
                </tr>
                <tr>
                    <td>Nama karyawan</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>