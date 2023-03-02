<?php 

include("koneksi.php");
global $koneksi; 

$id = $_GET["id"];
mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu=$id");
if (mysqli_affected_rows($koneksi) == 1) {
    echo "
        <script>
            alert('hapus menu berhasil!');
            document.location.href = 'dashboard-manajer.php?page=menu';
        </script>
    ";
} else {
    echo "
        <script>
            alert('hapus menu gagal!');
            document.location.href = 'hapus_menu.php?id=$id';
        </script>
    ";
}


?>