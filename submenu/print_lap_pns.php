<?php
error_reporting (E_ALL & ~E_NOTICE);
$no		 = 1;		
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"SELECT * from db_sertifikasi.laporan_pns");
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
$pdf->Cell(280,13,'Laporan Data Guru PAI PNS Bersertifikasi',0,1,'C');
// Setting spasi kebawah supaya tidak rapot
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,13,'No',1,0);
$pdf->Cell(35,13,'NIP',1,0);
$pdf->Cell(35,13,'NUPTK',1,0);
$pdf->Cell(35,13,'Nama Guru',1,0);
$pdf->Cell(50,13,'Sekolah',1,0);
$pdf->Cell(30,13,'Status Berkas',1,0);
$pdf->Cell(30,13,'Status Sertifikasi',1,0);
$pdf->Cell(33,13,'Status Kepegawaian',1,1);

 
$pdf->SetFont('Arial','',8);
$query = mysqli_query($connect, "SELECT * FROM db_sertifikasi.laporan_pns");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,13,$no,1,0);
	$pdf->Cell(35,13,$row['nip_guru'],1,0);
    $pdf->Cell(35,13,$row['nuptk_guru'],1,0);
    $pdf->Cell(35,13,$row['nama_guru'],1,0);
    $pdf->Cell(50,13,$row['tempat_mengajar'],1,0);
	$pdf->Cell(30,13,$row['status_berkas'],1,0);
	$pdf->Cell(30,13,$row['status_sertifikasi'],1,0);
	$pdf->Cell(33,13,$row['status_kepegawaian'],1,1);
	
	$no=$no+1;
}

$pdf->Output();
?>

