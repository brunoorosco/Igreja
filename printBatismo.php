<?php
//include("mpdf60/mpdf.php");
//include_once("_fonts/ funcoes.php");
require('_fonts/fpdf/fpdf.php');

//Connect to your database
 // include ('../../_fonts/config/banco.php');
// Connect to database...


$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();              
$pdf->AddFont('Pacifico','','Pacifico.php');
$pdf->SetFont('Pacifico', '', 24);
$pdf->SetTextColor(20, 20, 100); //rGB

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->Image('_fonts/img/batismo.png', 0, 0, $fpdf->w, $fpdf->h);
$pdf->Image('_fonts/img/batismo.png',0,0,222); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
$pdf->Image('_fonts/img/batismo.png',0,147,222); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
$pdf->Text(80, 64.5, "Bruno do Nascimento Orosco");
$pdf->Text(80, 80, " XX de Mês de Ano");
$pdf->Text(80, 64.5+147, "Teste nome de membro");
$pdf->Text(80, 74.5+147, " XX de Mês de Ano");

$pdf->Output();

?>