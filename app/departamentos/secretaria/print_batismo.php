<?php
//include("mpdf60/mpdf.php");
include_once("../../../_fonts/config/funcoes.php");
require('../../../_fonts/fpdf/fpdf.php');


//Connect to your database
  include ('../../../_fonts/config/banco.php');
// Connect to database...


$GLOBALS["branch"] = ""; //variavel tipo global para o cabeçalho 
$GLOBALS["encontro"] = "";

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
                $GLOBALS["encontro"] = "Batismo - Eu nasci de novo";
        //////////////////////////////////////////////
               
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../../../_fonts/img/logo.png',10,6,30);
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
$columns = array(array("name" => "COD",   "width" => 10),
                 array("name" => "NOME",  "width" => 80),
                 array("name" => "TELEFONE" , "width" => 35),
                 array("name" => "CEM" , "width" => 50));

$busca   = array(array("nome" => "nome", "width" => 80),
                 array("nome" => "nome_cem", "width" => 35));
               //  array("nome" => "CEM" , "width" => 50));
                 

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
$sql = 'SELECT nomeEnc,telEnc,CEM FROM encontrista where sexoEnc = "feminino" ORDER BY nomeEnc ASC';
$sql = "SELECT * FROM encontro INNER JOIN encontrista
    ON encontro.encontrista = encontrista.idEncontrista     
    WHERE encontro.n_encontro = '$encontro_atual' AND encontrista.sexoEnc = 'feminino'
    ORDER BY encontrista.nomeEnc ASC";
$sql = "SELECT batizando.nome, cem.nome_cem, eventos.titulo, eventos.inicioevento FROM batizando 
     INNER JOIN cem ON batizando.cem = cem.id 
     INNER JOIN eventos ON batizando.batismo = eventos.id 
     ORDER BY batizando.nome ASC";
$j =1;


foreach($pdo->query($sql)as $row)
          {
            $pdf->SetX(15);
              $code = $j++;
              //$name =  $row['nomeEnc'];
              //$tel = $row['telEnc'];
              // $CEM =  $row['CEM'];

            // $pdf->Cell($column['width'], 6, strtoupper($column['name']), 1, 0, 'L', 1);
            $pdf->Cell(10, 6, $code, 0);
              foreach ($busca as $column)
              {
                
                $pdf->Cell($column['width'], 6, $row[$column['nome']], 0);
                  // print_r($busca['nome']);
              }
              $pdf->Ln();
                              							  
              }




$GLOBALS["branch"] = "Homens";//sempre inserir esta variavel tipo global antes de adicionar nova pagina
$pdf->AddPage();
$pdf->AliasNbPages();
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

$sql = 'SELECT nomeEnc,telEnc,CEM FROM encontrista where sexoEnc = "masculino"  ORDER BY  nomeEnc ASC';
$sql = "SELECT * FROM encontro INNER JOIN encontrista
    ON encontro.encontrista = encontrista.idEncontrista     
    WHERE encontro.n_encontro = '$encontro_atual' AND encontrista.sexoEnc = 'masculino'
    ORDER BY encontrista.nomeEnc ASC";
$j =1;


foreach($pdo->query($sql)as $row)
          {
            $pdf->SetX(15);
              $code = $j++;
              //$name =  $row['nomeEnc'];
              //$tel = $row['telEnc'];
              // $CEM =  $row['CEM'];

            // $pdf->Cell($column['width'], 6, strtoupper($column['name']), 1, 0, 'L', 1);
            $pdf->Cell(10, 6, $code, 0);
              foreach ($busca as $column)
              {
                
                $pdf->Cell($column['width'], 6, $row[$column['nome']], 0);
                  // print_r($busca['nome']);
              }
              $pdf->Ln();
                              							  
              }

// Clean up
//mysqli_free_result($result);
//mysqli_close($conn);

$pdf->Output();
