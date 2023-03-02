<?php

$koneksi = mysqli_connect("localhost","root","","moca");
session_start();

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }
    return $rows;
}

function user($data) {
    global $koneksi;        
        $username = $data["username"];
        $password = $data["password"];
        $table = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
        $rows = mysqli_fetch_assoc($table);
        $pass = $rows["password"];
        $id = $rows["id_user"];
        $level = $rows["level"];
        if ($password == $pass) {
            $_SESSION["level"] = $level;
            $_SESSION["login"] = $id;
            if ($level === 'Admin') {
                echo "
                    <script>
                        alert('login telah berhasil');
                        document.location.href= 'dashboard2.php';
                    </script>
                    ";
            } elseif ($level == 'Kasir') {
                echo "
                    <script>
                        alert('login telah berhasil');
                        document.location.href= 'dashboard2.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('login telah berhasil');
                        document.location.href= 'dashboard2.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('yah gagal');
                    document.location.href = 'index.php';
                </script>
            "; 
        }
}

function regis($post){
    global $koneksi;
    $username = $post["username"];
    $nama = $post["nama"];
    $alamat = $post["alamat"];
    $noHp = $post["nohp"];
    $password = $post["password"];
    $level = $post["level"];

    mysqli_query($koneksi, "INSERT INTO `user` (`id_user`, `username`, `nama`, `alamat`, `no_hp`, `password`, `level`)
    VALUES('', '$username', '$nama', '$alamat', '$noHp', '$password', '$level')");
    if (mysqli_affected_rows($koneksi)) {
        echo "
        <script>
            alert('Data Berhasil Disimpan!');
            document.location.href = 'dashboard2.php?page=pegawai';
        </script>
        ";
    }
    
}

function transaksi($post){
    global $koneksi;
    $tanggal = $post["tanggal"];
    $harga = $post["harga"];
    $qty = $post["qty"];
    $nomeja = $post["no_meja"];


    mysqli_query($koneksi, "INSERT INTO transaksi_2 VALUES('', '$tanggal','$harga','$qty','$nomeja')");

    if (mysqli_affected_rows($koneksi)) {
        echo "
        <script>
            alert('Data Berhasil Disimpan!');
            document.location.href = 'laporan.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Berhasil Disimpan!');
            document.location.href = 'transaksi.php';
        </script>
        ";
    }

}

function upload($gambar) {
    $namaFile = $_FILES["gambar"]['name'];
    $ukuranFile = $_FILES["gambar"]['size'];
    $tmpName = $_FILES["gambar"]['tmp_name'];
    $error = $_FILES["gambar"]['error'];

    if ($error == 4 ) {
        return 0;
    }

    $ekstensigambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ekstensigambarValid)) {
        echo "
        <script>
            alert('Yang Anda Upload Bukan Gambar!');
        </script>
        ";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "
        <script>
            alert('Ukuran Size Terlalu Besar!');
        </script>
        ";
        return false;
    }

    if ($gambar == 'menu') {
        move_uploaded_file($tmpName, 'assets/images/menu/' . $namaFile);
    }

    return $namaFile;

}

function tambahMenu($request) {

global $koneksi;

$nama = $request["nama"];
$jenis = $request["jenis"];
$harga = $request["harga"];
$tgl = $request["tgl"];
$gambar = upload('menu');
if (!$gambar) {
    return false;
}

mysqli_query($koneksi, "INSERT INTO menu VALUES('', '$nama', '$jenis', '$harga', '$gambar', '$tgl')");
if (mysqli_affected_rows($koneksi)) {
    echo "
    <script>
        alert('Data Berhasil Disimpan!');
        document.location.href = '?page=menu';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Gagal Disimpan!');
        document.location.href = '?page=tambah-menu';
    </script>
    ";
}

}

function editMenu($post) {
    global $koneksi;

    $id = $post["id_menu"];
    $tgl = $post["tgl"];
    $nama = $post["nama"];
    $jenis = $post["jenis"];
    $harga = $post["harga"];
    $gambar_lama = $post["gambar_lama"];
    $gambar = upload('menu');
    if (!$gambar) {
        $gambar = $gambar_lama;
    }

    mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama', jenis_menu='$jenis', harga_menu='$harga',
    gambar='$gambar', tanggal='$tgl' WHERE id_menu=$id");
    if (mysqli_affected_rows($koneksi)) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = '?page=menu';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = '?page=edit-menu&id=$id';
        </script>
        ";
    }
}

function editP($post) {

    global $koneksi;
    $id = $post["id"];
    $username = $post["username"];
    $nama = $post["nama"];
    $alamat = $post["alamat"];
    $noHp = $post["nohp"];
    $level = $post["level"];
    $password = $post["password"];

    mysqli_query($koneksi, "UPDATE user SET username='$username', nama='$nama', alamat='$alamat', no_hp='$noHp', 
    password='$password', level='$level' WHERE id_user=$id");
    if (mysqli_affected_rows($koneksi)) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = '?page=pegawai';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = '?page=edit-pegawai&id=$id';
        </script>
        ";
    }
}

function cari($keyword) {
    $query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR 
    username LIKE '%$keyword%' OR level LIKE '%$keyword%'";
    return query($query);
}


?>