
<?php
require('../fpdf/fpdf.php');
include '../Connections/ConnectionFactory.php';

$connexao = "select * from smartcar.usuario ";
$con=mysqli_query($conn,$connexao) or die (mysqli_error($conn));

class PDF extends FPDF
{
// Page header
}

$pdf = new PDF('P','cm','A4');
$pdf->AddPage('L');
$pdf->SetFont('Times','',11);
while($row=mysqli_fetch_array($con))
{
	$pdf->Cell(7,1,$row['nome'],1,0,'L');
	$pdf->Cell(7,1,$row['email'],1,0,'L');
	$pdf->Cell(3,1,$row['fixo'],1,0,'L');
	$pdf->Cell(3,1,$row['celular'],1,0,'L');	
	$pdf->Cell(4,1,$row['cidade'],1,0,'L');
	$pdf->Cell(4,1,$row['bairro'],1,1,'L');
}
$pdf->Output();
?>