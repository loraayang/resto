<?php

include("koneksi.php");

if(!isset($_SESSION["login"]) && !isset($_SESSION["level"])) {
    header('Location: index.php');
}



$id = $_SESSION["login"];

$transaksi = query("SELECT * FROM transaksi_2");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/kasir.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h1>Kasir</h1>
            <ul>
                <li><a href="pegawai.php">Pegawai</a></li>
                <li><a href="shift.php">Shift</a></li>
            </ul>
        </div>
        <div class="content">
            <nav>
                <ul>
                    <li><a href="?page=menu">Dashboard</a></li>
                    <li><a href="?page=transaksi">Transaksi</a></li>
                    <li><a href="?page=laporan">Laporan</a></li>
                </ul>
            </nav>
            <main>
               <?php 
               if(isset($_GET['page'])) {
                   $page = $_GET['page'];

                   switch ($page) {
                        case 'transaksi':
                            include "transaksi.php";
                            break;
                        case 'menu':
                            include "menu.php";
                            break;
                        case 'laporan':
                            include "laporan.php";
                            break;
                        case 'kasir':
                            include "kasir.php";
                            break;
                        default:
                            echo "<center><h3>Maaf, Halaman Tydack Ditemukan !</h3></center>";
                   }
               } else {
                   include "kasir.php";
               }

               ?>
            </main>
        </div>
        <a href="logout.php">LOG OUT</a>
    </div>
</body>
