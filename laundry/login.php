<html>
<head>
    <title></title>
    <style>
        body{
    background-color: #ebcfc4;
}
fieldset{
    background-color: #cda09b ;
}
.aku{
    padding-left: 25%;
}
a:link{
    color : white;
    text-decoration : none;
    border: 3px white;
}
a:active{
    color : white;
}
a:visited{
    color : white;
}
fieldset{
    transition: 5s;
}

  a:link{
      color : black;
  }
  
    </style>
</head>
<body>
<?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $username = $_POST['username'];
            $password = $_POST['pass'];
            $pass = md5($password);

            if ($username == '' && $password == '12345') {
                ?>
                <div class = "save"><b>Warning!</b> Form Tidak Lengkap!</div>
                <?php
            }else {
                include "koneksi.php";
                $login = mysqli_query($connect, "SELECT * FROM login WHERE username = '$username' AND password = '$pass' ");
                $jumlah = mysqli_num_rows($login);
                $hasil = mysqli_fetch_array($login);

                if($jumlah > 0) {
                    session_start();
                    $_SESSION ['save'] = TRUE;
                    $_SESSION ['username'] = $hasil['username'];
                    $_SESSION ['password'] = $hasil['password'];

                    header('Location:data.php');
                }else{
                    ?>
                    <div class = "saver"><b>Error!</b> Username dan Password Salah!</div>
                    <?php
                }
            }
        }
        ?>
    <form action="data.php" method="POST">
    <fieldset>
    <legend><h2>LOGIN</h2></legend>
    <fieldset> 
        <div id="aku"> 
            <p> <label><h2><b>Username</b></h2></label>
            <input type="text" name="username" placeholder="Masukan Username" required> </p> 
        </div>
        <div class="a">
            <p> <label><h2><b>Password</b></h2></label>
            <input type="password" name="pass" placeholder="Masukan Password" required> </p> 
        </div>
        <button type="submit" name="save" >Login</button>
    </fieldset>
    </form>
</body>
</html>