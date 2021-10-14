<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title><style>
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
</head>

<body>
<div id = "saya">
<?php
include '../database.php';
$karyawan = new karyawan();
foreach ($karyawan->edit($_GET['id']) as $data) {
    $id_kar = $data['id_kar'];
    $nama = $data['nama'];
}
?>
        <div class = "d">
        <fieldset>
        <legend><h2>Edit Data Karyawan</h2></legend>
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
        </div>
</body>

</html>