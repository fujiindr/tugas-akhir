<?php
class karyawan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datakaryawan = mysqli_query($this->koneksi, "select * from karyawan");
        // var_dump($datakaryawan);
        return $datakaryawan;
    }

    // Menambah Data
    public function create($id_kar, $nama)
    {
        mysqli_query(
            $this->koneksi,
            "insert into karyawan values('$id_kar', '$nama')"
        );
    }
    // Menampilkan Data Berdasarkan id_kar
    public function show($id_kar)
    {
        $datakaryawan = mysqli_query(
            $this->koneksi,
            "select * from karyawan where id_kar='$id_kar'"
        );
        return $datakaryawan;
    }

    // Menampilkan data berdasarkan id_kar
    public function edit($id_kar)
    {
        $datakaryawan = mysqli_query(
            $this->koneksi,
            "select * from karyawan where id_kar='$id_kar'"
        );
        return $datakaryawan;
    }
    // mengupdate data berdasarkan id_kar
    public function update($id_kar, $nama)
    {
        mysqli_query(
            $this->koneksi,
            "update karyawan set id_kar='$id_kar', nama='$nama' where id_kar='$id_kar'"
        );
    }

    // menghapus data berdasarkan id_kar
    public function delete($id_kar)
    {
        mysqli_query($this->koneksi, "delete from karyawan where id_kar='$id_kar'");
    }
}

