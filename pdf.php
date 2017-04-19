<?php 

require('fpdf18/fpdf.php'); 




class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
  #  $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $pdf = new FPDF();

	$this->AddFont('ATOldEnglish', '', 'ATOldEnglish.php');
    $this->SetFont('ATOldEnglish','',30);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Gwyer Hall',0,0,'C');
    // Line break
    $this->Ln(12);
    $this->SetFont('ATOldEnglish','',15);
    $this->Cell(80);
    $this->Cell(30,10,'University of Delhi',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFillColor(11, 0, 0);
$pdf->AddPage();
$pdf->Image('images/icon_alumni.png',30,15,-300);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Name : Tanishq Kumar Dhangar ',0,1);
$pdf->Cell(0,10,"Mobile : +91-7532021921 ",0,1);
for($i=2;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output('xyz.pdf', 'I');
?>
