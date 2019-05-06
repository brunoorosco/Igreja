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
    $this->Cell(30,10,'Encontro com Deus Nº 130',0,0,'C');
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

$busca   = array(array("nome" => "nomeEnc", "width" => 80),
                 array("nome" => "telEnc", "width" => 35),
                 array("nome" => "CEM" , "width" => 50));
                 

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
$sql = 'SELECT nomeEnc,telEnc,CEM FROM encontrista ORDER BY sexoEnc ASC, nomeEnc ASC';
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
