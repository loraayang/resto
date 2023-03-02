<?php

$user = query("SELECT * FROM user");

if (isset($_POST["submit"])) {
    regis($_POST);
}

?>



<div class="container">
    <h1>TAMBAH PEGAWAI</h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username Pegawai</label>
                    <input type="hidden" name="tgl" value="<?= $tgl; ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LEVEL</label>
                    <select class="form-select" aria-label="Default select example" name="level">
                        <option selected>PILIH LEVEL PEGAWAI</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Manager">Manager</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                    <input type="number" class="form-control" name="nohp" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>