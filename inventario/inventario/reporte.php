<?php
include '../config/conexion.php';

// Forzamos a FPDF a mirar la carpeta del reporte para buscar helveticab.php
if (!defined('FPDF_FONTPATH')) {
    define('FPDF_FONTPATH', dirname(__FILE__) . '/');
}

require('../pdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

// Título del Reporte
$pdf->SetFont('helvetica', 'B', 16);
$pdf->Cell(190, 10, 'Reporte de Inventario', 0, 1, 'C');
$pdf->Ln(10);

// Encabezados de la Tabla
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(60, 10, 'Nombre', 1);
$pdf->Cell(40, 10, 'Cantidad', 1);
$pdf->Cell(40, 10, 'Precio', 1);
$pdf->Ln();

// Consulta
$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);

while($fila = $resultado->fetch_assoc()) {
    $pdf->Cell(20, 10, $fila['id'], 1);
    $pdf->Cell(60, 10, utf8_decode($fila['nombre']), 1);
    $pdf->Cell(40, 10, $fila['cantidad'], 1);
    $pdf->Cell(40, 10, '$' . $fila['precio'], 1);
    $pdf->Ln();
}

$pdf->Output();