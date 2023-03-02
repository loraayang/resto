<?php 

// require 'koneksi.php';

if(isset($_POST["simpan"])) {
    transaksi($_POST);
}

?>


    <div class="container">
    <main>
        <!-- <h1>Transaksi</h1> -->
        <div class="order">
            <div class="order-box">
                <div class="title-order">
                    Order
                </div>
                <form class="form-order" method="post" action=""> 
                    <div class="input-order">
                        <div class="input-label">
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <input type="date" name="tanggal" id="tanggal">
                    </div>
                    <div class="input-order">
                        <div class="input-label">
                            <label for="harga">Harga</label>
                        </div>
                        <input type="text" name="harga" id="harga">
                    </div>
                    <div class="input-order">
                        <div class="input-label">
                            <label for="qty">Qty</label>
                        </div>
                        <input type="text" name="qty" id="qty">
                    </div>
                    <div class="input-order">
                        <div class="input-label">
                            <label for="meja">No Meja</label>
                        </div>
                        <input class="meja" type="text" name="no_meja">
                       <button class="pilih-meja" >Pilih Meja</button>
                    </div>
                    <div class="button-order">
                        <button type="submit" name="simpan">Simpan</button>
                    </div>
                </fomr>
            </div>
            <div class="transaksi">
                <div class="title-transaksi">
                    <p>No.Invoice - <strong>202228731831883</strong></p>
                </div>
                <div class="table-transaksi">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ayam Goreng</td>
                                <td>20.000</td>
                                <td>2</td>
                                <td>40.000</td>
                                <td>40.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bayar">
                        <form action="" method="post">
                            <div class="input-order">
                                 <div class="input-label">
                                    <label for="seluruh">Total Keseluruhan</label>
                                </div>
                                <input type="text" name="seluruh" id="seluruh">
                            </div>
                            <div class="input-order">
                                <div class="input-label">
                                    <label for="bayar">Total Bayar</label>
                                </div>
                                <input type="text" name="bayar" id="bayar">
                            </div>
                            <div class="button-order">
                                <button type="submit" name="bayar">Bayar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>