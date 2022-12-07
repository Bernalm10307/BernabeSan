<?php
require('./FPDF/fpdf.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$rfc = $_POST['rfc'];
$curp = $_POST['curp'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,''.$nombre);
$pdf->Cell(40,10,''.$apellido);
$pdf->Cell(40,10,''.$direccion);
$pdf->Cell(40,10,''.$rfc);
$pdf->Cell(40,10,''.$curp);
$pdf->Output();
?>