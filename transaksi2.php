<?php


$laporan = query("SELECT * FROM transaksi_2");

// $koneksi = mysqli_connect("localhost", "root", "", "db_moca");

// $laporan = mysqli_query("SELECT * FROM transaksi_2");

// $result = mysqli_query($koneksi, $query);

?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">Daftar Transaksi</li>
                </ol>
            </div>
            <h4 class="page-title">Daftar Transaksi</h4>
        </div>
    </div>
</div>
<table id="datatable-buttons" class="mt-2 table table-striped dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>Tanggal Pesan</th>
            <th>Harga</th>
            <th>Quantity</th>
            <th>Nomor Meja</th>
            <!-- <th>Status</th>
            <th>Total</th> -->
        </tr>
    </thead>


    <tbody>
        <?php foreach($laporan as $row) : ?>
        <tr>
            <td><?= $row["tanggal"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["qty"]; ?></td>
            <td><?= $row["no_meja"] ?></td>
            <!-- <td>2011/04/25</td>
            <td>$3q20,800</td> -->
        </tr>
        <?php endforeach; ?>
        <!-- <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr> -->
    </tbody>
</table>
<a href="cetak.php">Cetak PDF</a>