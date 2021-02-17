<?php  
	session_start();
	include '../maestros/conexion.php';
	include '../librerias/fpdf.php';
	date_default_timezone_set("America/El_Salvador");
	$cn = new Database();
	$report = new FPDF('L','mm', 'A4'); 
	$report->AddFont('Poiret One','','PoiretOne-Regular.php');
	$report->AddFont('Pacifico','','Pacifico.php');
	$report->AddFont('Open Sans','','OpenSans-Semibold.php');
	$report->AddFont('Josefin Sans','','JosefinSans-Regular.php');
	$report->AddPage();
	$report->SetMargins(15, 15 , 15);
	$report->SetAutoPageBreak(true, 15); 
	$report->Image('../img/logo_report.png', 10, 7, 60, 30, 'PNG');
	$report->SetFont('Poiret One','', 25);
	$report->Cell(90, 10, '', 0);
	$report->Cell(90, 20, utf8_decode('Servicios Globales Logísticos'), 0);
	$report->Ln(20);
	$report->SetFont('Josefin Sans','', 25);
	$report->Cell(80, 10, '', 0);
	$report->Cell(90, 20, utf8_decode('Reporte de mercancías retiradas'), 0);
	$report->Ln(20);
	$report->SetFont('Josefin Sans', '', 12);
	$report->Cell(50, 10, 'Empresa: '.$_SESSION['name'], 0);
	$report->Ln(15);
    $report->SetDrawColor(4,0,181);
    $report->SetLineWidth(.3);
	$report->SetFont('Open Sans', '', 9);
	$report->Cell(18, 8, utf8_decode('Nombre'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Cajas'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('P. unit.'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Valor'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('P. de V.'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Bx Caja'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('ml'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('% Alcohol'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Botellas'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Litros'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Bruto TL'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('PBC'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Litros'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('Alicuota'), 1, 0, 'C');
	$report->Cell(18, 8, utf8_decode('ELC'), 1, 0, 'C');
	$report->Ln(8);
	$report->SetFont('Josefin Sans', '', 10);
	
	$report->Ln(8);
	$report->Cell(86,10,'Fecha: '.date("d-m-Y"),0,0,'C');
	$report->Cell(86,10,utf8_decode('Página ').$report->PageNo(),0,0,'C');
	$report->Cell(86,10,'Hora: '.date("H:i:s"),0,0,'C');
	$report->Output();
?>