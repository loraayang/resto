<?php

$tgl = date('Y-m-d');

if(isset($_POST["submit"])) {
    tambahMenu($_POST);
}

?>

<div class="container">
    <h1>TAMBAH MENU</h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
                    <input type="hidden" name="tgl" value="<?= $tgl; ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Makanan</label>
                    <select class="form-select" aria-label="Default select example" name="jenis">
                        <option selected>Jenis Makanan</option>
                        <option value="Coffe">Coffe</option>
                        <option value="Non Coffe">Non Coffe</option>
                        <option value="Latte">Latte</option>
                        <option value="Croffle">Croffle</option>
                        <option value="Pastries">Pastries</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto Menu</label>
                    <input type="file" class="form-control" name="gambar" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>