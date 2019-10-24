<?php
//include("mpdf60/mpdf.php");
//include_once("_fonts/ funcoes.php");
header('Content-Type: text/html; charset=utf-8');
require('_fonts/fpdf/fpdf.php');

//Connect to your database
 // include ('../../_fonts/config/banco.php');
// Connect to database...



$str = date('DD', strtotime('+day')). ' de ' . date('Monthy', strtotime('+month'));
//resultado: Mar

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();              
$pdf->AddFont('Pacifico','','Pacifico.php');
$pdf->SetFont('Pacifico', '', 24);
$pdf->SetTextColor(255,140,0); //rGB

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->Image('_fonts/img/batismo.png', 0, 0, $fpdf->w, $fpdf->h);
$pdf->Image('_fonts/img/batismo.png',0,0,222); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
$pdf->Image('_fonts/img/batismo.png',0,147,222); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
$pdf->Text(80, 64.5, "Jose Carlos Alves da Silva");
$pdf->Text(80, 64.5+147, "Michele Alves da Silva");

$pdf->SetFont('Arial', '', 18);
$pdf->SetTextColor(10,10,10); //rGB
$pdf->Text(110, 76.5, "26 de Junho de 2011");
$pdf->Text(110, 76.5+147, "21 de Julho de 2013");

$pdf->Output();

?>