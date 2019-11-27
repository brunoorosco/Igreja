<?php
//include("mpdf60/mpdf.php");
include_once("../../_fonts/config/funcoes.php");
require('../../_fonts/fpdf/fpdf.php');


//Connect to your database
  include ('../../_fonts/config/banco.php');
// Connect to database...


$GLOBALS["branch"] = ""; //variavel tipo global para o cabeçalho 
$GLOBALS["encontro"] = "";
$idCursos = $_GET["c"];

///////////  prepara variavel e textos
$encontro_txt =  encontro();
//$encontro_numero = substr($encontro_txt,(strlen($encontro_txt)-3),strlen($encontro_txt)); //pega as 3 ultimos caracteres
$encontro_numero = preg_replace("/[^0-9]/", "", $encontro_txt);
$encontro_frase = strstr($encontro_txt, ' ', true);

//print encontro_atual();
//print $encontro_frase. 'com Deus - Nº'.$encontro_numero;

         ///FUNÇÃO PARA INSERIR PROXIMO Nº DE ENCONTRO
                $encontro_atual =  encontro_atual();
               // $encontro_txt =  encontro();
                $GLOBALS["encontro"] = $encontro_frase. ' com Deus - Nº '.$encontro_numero;
        //////////////////////////////////////////////
               
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../../_fonts/img/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,$GLOBALS["encontro"],0,0,'C');
    $this->Cell(-30,22,$GLOBALS["branch"],0,0,'C');
  
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
    $this->Cell(0,10,'Pág. '.$this->PageNo().'/{nb}',0,0,'C');
}
}


// Define your columns like so:
$columns = array(array("name" => "COD",   "width" => 15),
                 array("name" => "NOME",  "width" => 100),
                 array("name" => "SITUAÇÃO" , "width" => 50));

$busca   = array(array("nome" => "nome", "width" => 103),
                 array("nome" => "status_", "width" => 50));
                 

//$pdf = new FPDF();
//$pdf->AliasNbPages();
//$pdf->AddPage();

$pdf = new PDF();
$GLOBALS["branch"] = "Mulheres"; //sempre inserir esta variavel tipo global antes de adicionar nova pagina
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);




// Table header
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
 // Position at 1.5 cm from bottom
 $pdf->SetX(15);
foreach ($columns as $column)
{
    $pdf->Cell($column['width'], 6, strtoupper($column['name']), 1, 0, 'L', 1);
}
$pdf->Ln();

// Table rows
$pdf->SetFont('Arial', '', 10);

$code = "";
$name = "";


$pdo = Banco::conectar();
$sql = "SELECT * FROM historico 
        INNER JOIN infocursos ON historico.curso = infocursos.idCursos 
        WHERE infocursos.idCursos = '$idCursos' ORDER BY nome ASC";
$j =1;


foreach($pdo->query($sql)as $row)
          {
            $pdf->SetX(15);
              $code = $j++;
              //$name =  $row['nomeEnc'];
              //$tel = $row['telEnc'];
              // $CEM =  $row['CEM'];

            // $pdf->Cell($column['width'], 6, strtoupper($column['name']), 1, 0, 'L', 1);
            $pdf->Cell(15, 6, $code, 0);
              foreach ($busca as $column)
              {
                
                $pdf->Cell($column['width'], 6, $row[$column['nome']], 0);
                  // print_r($busca['nome']);
              }
              $pdf->Ln();
                              							  
              }




$pdf->Output();
