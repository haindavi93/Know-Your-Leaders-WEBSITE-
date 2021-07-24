<?php
require ('config.php');
require ('DBController.php');
 
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM poll");
$header = $db_handle->runQuery("SELECT column_name 
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE TABLE_NAME = 'poll'");

require('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12); 

if(is_array($header) || is_object($header))
{
foreach($header as $heading) {
	
    foreach($heading as $column_heading)
        $pdf->Cell(33,12,$column_heading,1);
}
}
if(is_array($result) || is_object($result)){
foreach($result as $row) {
    $pdf->SetFont('Arial','',9);   
    $pdf->Ln();
    foreach($row as $column)
        $pdf->Cell(33,12,$column,1);
}
}
$pdf->Output();
?>