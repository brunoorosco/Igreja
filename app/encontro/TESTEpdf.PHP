<?php
//include("mpdf60/mpdf.php");
require('../../_fonts/fpdf/fpdf.php');

//Connect to your database
  include ('../../_fonts/config/banco.php');
// Connect to database...

// Define your columns like so:
$columns = array(array("name" => "COD",   "width" => 10),
                 array("name" => "NOME",  "width" => 60),
                 array("name" => "TELEFONE" , "width" => 30),
                 array("name" => "CEM" , "width" => 40));

$busca   = array(array("nome" => "nomeEnc", "width" => 60),
                 array("nome" => "telEnc", "width" => 30),
                 array("nome" => "CEM" , "width" => 40));
                 

$pdf = new FPDF();
$pdf->AddPage();

// Table header
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
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
