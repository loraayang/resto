<?php

// include("koneksi.php");

$transaksi = query("SELECT * FROM transaksi_2");

?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/laporan.css">
</head>
<body>
    <div class="container">
        <div class="report">
            <table border="1" cellpadding="15" cellspacing="0">
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <th>Quantity</th>
                    <th>No Meja</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($transaksi as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["tanggal"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                    <td><?= $row["qty"]; ?></td>
                    <td><?= $row["no_meja"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>