<?php

require('fpdf/fpdf.php');

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='../expulsar.php';</script>";
  die();
}

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.png',16,2,20);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(55);
    // Título
    $this->Cell(80,10,'Reporte de almuerzos I.E.P.S',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(25, 10, 'Codigo', 1, 0, 'C', 0);
	$this->Cell(85, 10, 'Nombre', 1, 0, 'C', 0);
	$this->Cell(15, 10, 'Grado', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Especialidad', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'Fecha-Recibido', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';//Llamar a la conexion.
$consulta = "SELECT * FROM no_almuerzan";//Traer todos los datos de la tabla estudiantes.
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row = $resultado->fetch_assoc()) {
	$pdf->Cell(25, 10, $row['codigo'], 1, 0, 'C', 0);
	$pdf->Cell(85, 10, $row['nombre'], 1, 0, 'C', 0);
	$pdf->Cell(15, 10, $row['grado'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['especialidad'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['fecha'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
