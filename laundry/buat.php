<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
    <style>
#saya{
    float : center;
    width : 100%;
    padding : 2PX;
    background :#ba8d87;
    color : black;
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
    float : right;
    width : 98%;
    height : 500px;
    background : #cda09b ;
    color : black;
    padding-left : 2%;
    padding-right : 2%;
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
<div id = "saya">
            <p><h2><b>CLEAN LAUNDRY</b></h2></p>
        </div>
        <div class="aku">
        <a href="data.php">Data Laundry</a>
        <a href="create.php">Tambah Data Laundry</a>
        <a href="buat.php">Tambah Data Karyawan</a>
        <a href="tabel.php">Data Karyawan</a>
        </div>
        <div class = "d">
        <fieldset>
        <legend><h2>Input Data Karyawan</h2></legend>
        <form action="proses_karyawan.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>ID Karyawan</td>
                    <td><input type="text" name="id_kar" required></td>
                </tr>
                <tr>
                    <td>Nama Karyawan</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="save">Simpan </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
        </div>
    
</body>
</html>
