<?php

global $koneksi;

$id = $_GET["id"];

$menu = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu=$id");

if(isset($_POST["submit"])) {
    editMenu($_POST);
}

?>

<div class="container">
    <h1>TAMBAH MENU</h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <?php foreach($menu as $key) : ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
                    <input type="hidden" name="id_menu" value="<?= $id; ?>">
                    <input type="hidden" name="tgl" value="<?= $key["tanggal"]; ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $key["nama_menu"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Makanan</label>
                    <select class="form-select" aria-label="Default select example" name="jenis">
                        <option selected><?= $key["jenis_menu"]; ?></option>
                        <option value="Coffe">Coffe</option>
                        <option value="Non Coffe">Non Coffe</option>
                        <option value="Latte">Latte</option>
                        <option value="Croffle">Croffle</option>
                        <option value="Pastries">Pastries</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" id="exampleInputPassword1" value="<?= $key["harga_menu"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto Menu</label>
                    <input type="hidden" name="gambar_lama" value="<?= $key["gambar"]; ?>">
                    <input type="file" class="form-control" name="gambar" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <?php endforeach; ?>
            </form>
            </div>
        </div>
    </div>
</div>