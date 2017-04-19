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
