<?php
$batismo1 = "";
$batismo2 = "";
$bat1 = true;
$bat2 = true;



if (isset($_POST['nome1'])) {
	//echo 'variável é inexistente';
	$batismo1 = $_POST['nome1'];
	$bat1 = true;
}

if (isset($_POST['nome2'])) {
	//echo 'variável é inexistente';
	$batismo2 = $_POST['nome2'];
	$bat2 = true;
}

//include("mpdf60/mpdf.php");
//include_once("_fonts/ funcoes.php");
header('Content-Type: text/html; charset=utf-8');
require('../../../_fonts/fpdf/fpdf.php');
require_once('./func_sec.php');
//Connect to your database
// include ('../../_fonts/config/banco.php');
// Connect to database...

//Define informações locais 
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$dadosBatismo = certificadoBatismo('24');
var_dump ($dadosBatismo);


$str = date('d-m-Y');
//resultado: Mar

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('Pacifico', '', 'Pacifico.php');
$pdf->SetFont('Pacifico', '', 24);
$pdf->SetTextColor(255, 140, 0); //rGB

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->Image('_fonts/img/batismo.png', 0, 0, $fpdf->w, $fpdf->h);
if ($bat1 == true) {
	$pdf->SetFont('Pacifico', '', 24);
	$pdf->SetTextColor(255, 140, 0); //rGB
	$pdf->Image('../../../_fonts/img/certificadoBatismo.jpeg', -2, 0, 215); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
	$pdf->Text(80, 64.5, $batismo1);
	$pdf->SetFont('Arial', '', 18);
	$pdf->SetTextColor(10, 10, 10); //rGB
	$pdf->Text(110, 76.5, "21 de Julho de 2013");
}

if ($bat2 == true) {
	$pdf->SetFont('Pacifico', '', 24);
	$pdf->SetTextColor(255, 140, 0); //rGB
	$pdf->Image('../../../_fonts/img/certificadoBatismo.jpeg', -2, 147, 215); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
	$pdf->Text(80, 64.5 + 147, $batismo2);
	$pdf->SetFont('Arial', '', 18);
	$pdf->SetTextColor(10, 10, 10); //rGB
	$pdf->Text(110, 76.5 + 147, "24 de Outubro de 2010");
}

$pdf->AddPage();
if ($bat2 == true) {
	$pdf->SetFont('Pacifico', '', 24);
	$pdf->SetTextColor(255, 140, 0); //rGB
	$pdf->Image('../../../_fonts/img/certificadoBatismo.jpeg', -2, 147, 215); //primeiro valor posição em X,segundo valor posição em Y, terceiro valor tamanho
	$pdf->Text(80, 64.5 + 147, $batismo2);
	$pdf->SetFont('Arial', '', 18);
	$pdf->SetTextColor(10, 10, 10); //rGB
	$pdf->Text(110, 76.5 + 147, "24 de Outubro de 2010");
}

	
//$pdf->Output('D', 'Certificado de Batismo - ' . $str . '.pdf');

