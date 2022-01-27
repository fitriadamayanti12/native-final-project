<?php
error_reporting (E_ALL & ~E_NOTICE);
$no		 = 1;		
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"SELECT * from db_sertifikasi.laporan_jumlah");
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A3');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(280,13,'Sistem Informasi Sertifikasi Guru PAI Di Kantor Kementerian Agama Kabupaten Merangin',0,1,'C');
$pdf->SetFont('Arial','B',13);
$pdf->Cell(280,13,'Laporan Data Jumlah Guru PAI Bersertifikasi Di Setiap Sekolah',0,1,'C');
// Setting spasi kebawah supaya tidak rapot
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,13,'No',1,0);
$pdf->Cell(30,13,'NPSN Sekolah',1,0);
$pdf->Cell(50,13,'Sekolah',1,0);
$pdf->Cell(50,13,'Kecamatan',1,0);
$pdf->Cell(40,13,'Jumlah Seluruh Siswa',1,0);
$pdf->Cell(40,13,'Jumlah Siswa Muslim',1,0);
$pdf->Cell(40,13,'Jumlah Guru Bersertifikasi',1,1);

 
$pdf->SetFont('Arial','',8);
$query = mysqli_query($connect, "SELECT * FROM db_sertifikasi.laporan_jumlah");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,13,$no,1,0);
    $pdf->Cell(30,13,$row['npsn_sekolah'],1,0);
	$pdf->Cell(50,13,$row['nama_sekolah'],1,0);
	$pdf->Cell(50,13,$row['kecamatan'],1,0);
	$pdf->Cell(40,13,$row['jumlah_seluruh_siswa'],1,0);
	$pdf->Cell(40,13,$row['jumlah_siswa_muslim'],1,0);
	$pdf->Cell(40,13,$row['jumlah_guru_sertifikasi'],1,1);
	
	$no=$no+1;
}

$pdf->Output();
?>

