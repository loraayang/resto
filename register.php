<?php 

require 'koneksi.php';

if(isset($_POST['daftar'])){
    regis($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <div class="register">
            <h1>DAFTAR</h1>
            <form action="" method="post">
                <label for="">Username</label><br>
                <input type="text" name="username"><br>
                <label for="">Nama Lengkap</label><br>
                <input type="text"name="nama"><br>
                <label for="">Alamat</label><br>
                <input type="text"name="alamat"><br>
                <label for="">No HP</label><br>
                <input type="number"name="no_hp"><br>
                <label for="">Password</label><br>
                <input type="text" name="password"><br>
                <label for="">Level</label>
                <select name="level" id="">
                    <option value="1">admin</option>
                    <option value="2">manager</option>
                    <option value="3">kasir</option>
                </select>
                <button type="submit" name="daftar">Daftar dulu</button>
            </form>
        </div>
    </div>
</body>
</html>