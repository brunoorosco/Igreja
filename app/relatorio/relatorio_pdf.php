<?php
//include("mpdf60/mpdf.php");
require('../../_fonts/fpdf/fpdf.php');

//Connect to your database
  include ('../../_fonts/config/banco.php');
// Connect to database...

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
    $this->Cell(30,10,'Pessoas que Aceitaram e Reconciliaram - Março/2019',0,0,'C');
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
$columns = array(array("name" => "NOME",   "width" => 70),
                 array("name" => "STATUS",  "width" => 30),
                 array("name" => "DATA" , "width" => 30),
                 array("name" => "CEM" , "width" => 40));

$busca   = array(array("nome" => "nome", "width" => 80),
                 array("nome" => "aceit_reconc", "width" => 30),
                 array("nome" => "cadastro" , "width" => 30),
                 array("nome" => "cem" , "width" => 40));
                 

//$pdf = new FPDF();
//$pdf->AliasNbPages();
//$pdf->AddPage();

$pdf = new PDF();
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
$sql = 'SELECT nome, aceit_reconc,  cadastro, cem FROM aceita_jesus where EXTRACT(YEAR_MONTH FROM cadastro) = "201903" ORDER BY cadastro ASC, aceit_reconc ASC';
$j =1;


foreach($pdo->query($sql)as $row)
          {
            $pdf->SetX(15);
               //$name =  $row['nomeEnc'];
              //$tel = $row['telEnc'];
              // $CEM =  $row['CEM'];

            // $pdf->Cell($column['width'], 6, strtoupper($column['name']), 1, 0, 'L', 1);
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
