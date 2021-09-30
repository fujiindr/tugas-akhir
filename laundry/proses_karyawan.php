<?php
include '../database.php';
$karyawan = new karyawan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_kar = $_POST['id_kar'];
    $nama = $_POST['nama'];

    if ($aksi == "create") {
        $karyawan->create($id_kar, $nama);
        header("location:tabel.php");
    } elseif ($aksi == "update") {
        $karyawan->update($id_kar, $nama);
        header("location:tabel.php");
    } elseif ($aksi == "delete") {
        $karyawan->delete($id_kar);
        header("location:tabel.php");
    }

}
