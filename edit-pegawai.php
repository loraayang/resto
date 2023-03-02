<?php 

$id = $_GET["id"];

$user = query("SELECT * FROM user WHERE id_user = $id");

$level = query("SELECT * FROM user");

if (isset($_POST["submit"])) {
    editP($_POST);
}
?>


<div class="container">
    <h1>EDIT</h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <?php foreach($user as $key) : ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="hidden" name="password" value="<?= $key["password"]?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $key["nama"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= $key["username"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LEVEL PEGAWAI</label>
                    <select class="form-select" aria-label="Default select example" name="level">
                        <?php if($key["level"] == 'Admin') : ?>
                        <option value="Admin" selected>Admin</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Manager">Manager</option>
                        <?php elseif($key["level"] == 'Kasir') : ?>
                            <option value="Kasir" selected>Kasir</option>
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <?php else : ?>
                        <option value="Manager" selected>Manager</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                        <?php endif;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="" cols="30" rows="5"><?= $key["alamat"]?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                    <input type="number" class="form-control" value="<?= $key["no_hp"]?>" name="nohp" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <?php endforeach; ?>
            </form>
            </div>
        </div>
    </div>
</div>