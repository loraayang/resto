<?php

require 'koneksi.php';


if (isset($_POST["user"])) {
    user($_POST);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body> 
        <div class="container">
            <img src="image/mountaincafe.jpg" alt="" class="image">
            <form action="" method="post">    
                <img src="moca/image/mountaincafe.jpeg" alt="" width="300px" class="logo">
                <h1>LOG IN</h1>
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="Password" name="password"><br>
                <div class="regis">
                    <div class="button">
                        <a href="register.php">DAFTAR!</a>
                    </div>
                    <button type="submit" name="user">LOG IN</button>
                </div>    
            </form>
        </div>
    </body>
</html>

