<?php

$user = query("SELECT * FROM user");

$no = 1;

if (isset($_POST["cari"])) {
    $user = cari($_POST["keyword"]);
}

?>


<div class="container">
    <div class="row action">
    <div class="mb-2">
        <a href="?page=tambah-pegawai" class="btn btn-success">TAMBAH PEGAWAI +</a>
    </div>
    <form class="d-flex" action="" method="POST">
    <input type="search" name="keyword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button type="submit" name="cari" class="btn btn-primary ml-4 ">CARI</button>
</form>
    <table class="table">
    <thead class="text-center">
    <tr>
        <th scope="col">NO</th>
        <th scope="col">Username</th>
        <th scope="col">Nama Lengap</th>
        <th scope="col">Alamat</th>
        <th scope="col">No HP</th>
        <th scope="col">level</th>
        <th scope="col">ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($user as $key) : ?>
    <tr>
        <td><?= $no++?></td>
        <td><?= $key["username"]; ?></td>
        <td><?= $key["nama"]; ?></td>
        <td><?= $key["alamat"]; ?></td>
        <td><?= $key["no_hp"]?></td>
        <td><?= $key["level"]; ?></td>
        <td>
            <a style="font-size: 12px;" href="?page=edit-pegawai&id=<?= $key["id_user"]; ?>" class="btn btn-warning">EDIT</a> |
            <a style="font-size: 12px;" href="hapus_pegawai.php?id=<?= $key["id_user"]; ?>" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>