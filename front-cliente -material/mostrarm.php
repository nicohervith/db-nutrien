<?php

    include("con_db.php");
?>

<?php
require('fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Logo
    $this->Image('img/LOGONutrien.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(40,10,'Material',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(10,10, 'Id', 1, 0, 'C', 0);
	$this->Cell(50,10, 'Nombre', 1, 0, 'C', 0);
	$this->Cell(100,10, 'Email', 1, 0, 'C', 0);
	$this->Cell(30,10, 'Telefono', 1, 1, 'C', 0);
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

require 'mmat.php';

$consulta = 'SELECT * FROM datos_material';

$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row = $resultado-> fetch_assoc()){
	$pdf->Cell(10,10, $row['id'], 1, 0, 'C', 0);
	$pdf->Cell(50,10, $row['nombre'], 1, 0, 'C', 0);
	$pdf->Cell(100,10, $row['email'], 1, 0, 'C', 0);
	$pdf->Cell(30,10, $row['telefono'], 1, 1, 'C', 0);
}

$pdf->Output();
?>


