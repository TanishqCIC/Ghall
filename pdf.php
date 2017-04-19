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
