<html>
<head>
    <title>Latihan CRUD - Create Data</title>
    <style>
#saya{
    float : center;
    width : 98%;
    padding : 1PX;
    background :#ba8d87;
    color : black;
    padding-left : 2%;
}
.aku {
    background-color: #caaa93;
    border: none;
    color: black;
    width: 100%;
    height: 20px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    cursor: pointer;
  }
  
.d {
    float : left;
    width : 98%;
    height : 500px;
    background : #cda09b ;
    color : black;
    padding-left : 2%;
}
A:link {
    color : black;
    padding : 1%;
    text-decoration : none;
}
a:active{
    color:black;
}
a:visited{
    color:black;
}
</style>
</head>
<body>
<?php
    include '../database.php';
    $laundry = new laundry();
     ?>
     <div id = "saya">
            <p><h2><b>CLEAN LAUNDRY</b></h2></p>
        </div>
        <div class="aku">
        <a href="data.php">Data Laundry</a>
        <a href="create.php">Tambah Data Laundry</a>
        <a href="buat.php">Tambah Data Karyawan</a>
        <a href="tabel.php">Data Karyawan</a>
        <a href="login.php"> Keluar</a>
        </div>
        <div class = "d">
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <fieldset>
            <legend> <h2>Input Data Laundry</h2></legend>
            <table>
                <tr>
                    <td>ID karyawan</td>
                    <td><select name="id_kar">
                        <?php
                        $karyawan = new karyawan();
                        foreach ($karyawan->index() as $data){
                        ?>
                        <option value="<?php echo $data['id_kar'];?>"><?php echo $data ['id_kar']; ?></option>
                        <?php }?>
                    </select></td>
                </tr>
                <tr>
                    <td>Kode Pelanggan</td>
                    <td><input type="text" name="kode_pesanan" required></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                 <tr>
                    <td>Tanggal Pengambilan</td>
                    <td><input type="date" name="kembali" required></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                <td>Jenis Paket </td>
                <td><select name = "paket">
                <option value = " ">Jenis Paket</option>
                <option value = "Cuci Satuan">Cuci Satuan</option>
                <option value = "Cuci Komplit">Cuci Komplit</option>
                <option value = "Cuci Satuan">Expres</option>
                </select></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="number" name="berat" required></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="save">Simpan </button>
                    </td>
                </tr>
            </table>
        </form>
        </div>
        </fieldset>
</body>
</html>
