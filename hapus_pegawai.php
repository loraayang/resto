<?php 

include("koneksi.php");
global $koneksi; 

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus pegawai berhasil!');
            document.location.href = 'dashboard2.php?page=pegawai';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus pegawai gagal!');
            document.location.href = 'dashboard-manajer.php?page=pegawai';
        </script>
    ";
}


?>