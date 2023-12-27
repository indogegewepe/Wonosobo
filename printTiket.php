<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'functions/config.php';
$id = $_GET['id'];
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'INVOICE TIKET', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, "C");
$pdf->Cell(20, 6, 'AMOUNT', 1, 0, "C");
$pdf->Cell(25, 6, 'PACKAGE', 1, 0, "C");
$pdf->Cell(25, 6, 'TANGGAL', 1, 0, "C");
$pdf->Cell(30, 6, 'PRICE', 1, 0, "C");
$pdf->Cell(30, 6, 'TOTAL', 1, 1, "C");
$pdf->SetFont('Arial', '', 10);
$no=1;
$data = mysqli_query($conn, "SELECT * FROM keranjang JOIN customer ON customer.id_cust=keranjang.id_customer JOIN paketwisata ON paketwisata.id_wisata=keranjang.id_wisata WHERE id_keranjang='$id'");
while ($keranjang = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, "C");
    $pdf->Cell(20, 6, $keranjang['jumlah_tiket'], 1, 0, "C");
    $pdf->Cell(25, 6, $keranjang['nama_tempat'], 1, 0, "C");
    $pdf->Cell(25, 6, $keranjang['tanggal'], 1, 0, "C");
    $pdf->Cell(30, 6, "Rp. ".$keranjang['harga_tiket'].".00,-", 1, 0, "C");
    $pdf->Cell(30, 6, "Rp. ".($keranjang['harga_tiket']*$keranjang['jumlah_tiket'])+(2000*$keranjang['jumlah_tiket']).".00,-", 1, 1, "C");
}
$pdf->Output();

?>