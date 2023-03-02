<?php

$id = $_GET["id"];

$produk = query("SELECT * FROM menu WHERE id_menu = $id");

$harga = query("SELECT harga_menu FROM menu WHERE id_menu = $id");



?>
<div class="row mt-4">
    <div class="col-12">
        <div class="card mb-0 pb-2">
            <div class="card-body">
                <div class="row">
                    <div class="">
                        <div class="table-responsive" style="max-height: 700px;">
                            <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Kuantitas</th>
                                        <th>Total</th>
                                        <th style="width: 50px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produk as $key) : ?>
                                        <tr class="menu" data-id="<?= $key["id_menu"] ?>">
                                            <td>
                                                <img src="assets/images/menu/<?= $key["gambar"] ?>" alt="contact-img" title="contact-img" class="rounded me-3" height="64">
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html" class="nama-produk text-body"><?= $key["nama_menu"] ?></a>
                                                    <br>
                                                    <small class="me-2"><?= $key["jenis_menu"] ?></small>
                                                </p>
                                            </td>
                                            <td class="harga-produk">
                                                <input type="text" class="border border-none" readonly name="harga" value="<?= $key["harga_menu"] ?>">
                                            </td>
                                            <td class="total-qty">
                                            <input type="number" name="qty" id="qty">
                                        </td>
                                        <td class="total-perQty d-flex mt-3">
                                                <button onclick="hitungTotal()" class="btn btn-info">Hitung Total</button>
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div>
                    <!-- end col -->
                    <div class="row ">
                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                            <h4 class="header-title mb-3">Order Summary</h4>

                            <div class="table-responsive">
                                <table id="complex-header-datatable" class="table dt-responsive nowrap">
                                    <tbody>
                                        <div class="cart-list d-flex flex-column justify-content-between">
                                            
                                        </div>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="d">
                                                <p>RP. </p class="mr-2"><span id="total"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ppn :</td>
                                            <td>$25</td>
                                        </tr>
                                        <tr>
                                            <td>Meja : </td>
                                            <td><button class="p-0 w-75 h-50 btn btn-primary" type="">Pilih</button></td>
                                        </tr>
                                        <tr>
                                            <th>Total :</th>
                                            <th>$1458.3</th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>

                        <div class="col-8 w-100 mt-2">
                            <div class="text-sm-end">
                                <a href="checkout.php" class="btn btn-danger w-100">
                                    <i class="fa-solid fa-cart-shopping"></i> Submit
                                </a>
                            </div>
                        </div>

                    </div> <!-- end col -->

                </div> <!-- end row -->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

                   

<script>
    function hitungTotal() {
    var harga = document.getElementsByName("harga")[0].value;
    var qty = document.getElementsByName("qty")[0].value;
    var total = harga * qty;
    document.getElementById("total").innerHTML = total;
}
</script>