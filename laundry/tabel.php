<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    table{
        background-color : #ebcfc4;
    }
    button{
        background-color : #ebcfc4;
    }
</style>
    </style>
</head>

<body>
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
        <fieldset>
        <legend><h2>Data Karyawan</h2></legend>
        <table border="1">
        <center>
            <tr>
                <th>No</th>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Aksi</th>
            </tr>
             <?php
include '../database.php';
$karyawan = new karyawan();
$no = 1;
foreach ($karyawan->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_kar']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td>
                        <form action="proses_karyawan.php" method="post">
                            <input type="hidden" name="id_kar" value="<?php echo $data['id_kar']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?></center>
    </table>
    </fieldset>
        </div>
    
</body>

</html>