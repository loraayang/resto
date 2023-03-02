<?php

$menu = query("SELECT * FROM menu");

$no = 1;

?>


<div class="container">
    <div class="row action">
    <div class="mb-2">
        <a href="?page=tambah-menu" class="btn btn-success">TAMBAH MENU +</a>
    </div>
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col"><input type="checkbox" name="" disable id=""></th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Jenis Menu</th>
      <th scope="col">Harga Menu</th>
      <th scope="col">Foto Menu</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php foreach($menu as $key) : ?>
    <tr>
      <td><?= $no++?></td>
      <td><?= $key["nama_menu"]; ?></td>
      <td><?= $key["jenis_menu"]; ?></td>
      <td>RP. <?= $key["harga_menu"]; ?></td>
      <td><img src="assets/images/menu/<?= $key["gambar"];?>" width="50" alt=""></td>
      <td>
        <a style="font-size: 12px;" href="?page=buat-transaksi&id=<?= $key["id_menu"]; ?>" class="btn btn-warning">PILIH</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>  