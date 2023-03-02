<?php

require('fpdf185/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'LAPORAN TRANSAKSI',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(20,6,'Tanggal',1,0,'C');
$pdf->Cell(50,6,'Harga',1,0,'C');
$pdf->Cell(30,6,'Quantity',1,0,'C');
$pdf->Cell(30,6,'Nomor Meja',1,1,'C');
// $pdf->Cell(30,6,'Total',1,0,'C');
// $pdf->Cell(20,6,'Umur',1,1,'C');

$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
// $host="localhost";
// $user="root";
// $password="";
// $db="akademik";

// $kon = mysqli_connect($host,$user,$password,$db);
include("koneksi.php");

$no=1;
$jk='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($koneksi, "SELECT * FROM transaksi_2 ORDER BY id_meja ASC");
while ($data = mysqli_fetch_array($hasil)){
    // if ($data['jk']==1){
    //     $jk='Lali-laki';
    // }else{
    //     $jk='Perempuan';
    // }
    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(20,6,$data['tanggal'],1,0);
    $pdf->Cell(50,6,$data['harga'],1,0);
    // $pdf->Cell(30,6,$jk,1,0);
    $pdf->Cell(30,6,$data['qty'],1,0);
    $pdf->Cell(30,6,$data['no_meja'],1,1);
    // $pdf->Cell(20,6,$data['umur'],1,1);
    $no++;
}

$pdf->Output();
?>