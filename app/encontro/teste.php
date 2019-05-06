<?php 
	//include("mpdf60/mpdf.php");
	require('../../_fonts/fpdf/fpdf.php');

	//Connect to your database
    include ('../../_fonts/config/banco.php');

//Select the Products you want to show in your PDF file
//$result=mysql_query("select Code,Name,Price from Products ORDER BY Code",$link);
//$number_of_products = mysql_numrows($result);

$sql = "SELECT nomeEnc FROM encontrista limit 30";

$pdo = Banco::conectar();
$result = $pdo->query( $sql );
$number_of_products = $result->rowCount();


//Initialize the 3 columns and the total
$column_code = "";
$column_name = "";
$column_CEM = "";
$column_tel = "";
$total = 0;
$CEM = 0;

$pdo = Banco::conectar();
$sql = 'SELECT * FROM encontrista ORDER BY sexoEnc ASC, nomeEnc ASC';
$j =1;


foreach($pdo->query($sql)as $row)
          {
                        
                                  $code = $j++;
                                  $name =  $row['nomeEnc'];
                                  $tel = $row['telEnc'];
                                  $CEM =  $row['CEM'];

								  $column_code = $column_code.$code."\n";
								  $column_name = $column_name.$name."\n";
								  $column_CEM = $column_CEM.$CEM."\n";
								  $column_tel = $column_tel.$tel."\n";
							  
              }
//For each row, add the field to the corresponding column
/*while($row = mysql_fetch_array($result))
{
    $code = $row["Code"];
    $name = substr($row["Name"],0,20);
    $column_tel = $row["Price"];
    $price_to_show = number_format($row["Price"],',','.','.');

    $column_code = $column_code.$code."\n";
    $column_name = $column_name.$name."\n";
    $column_CEM = $column_CEM.$price_to_show."\n";

    //Sum all the Prices (TOTAL)
    $total = $total+$column_tel;
}
mysql_close();*/

//Convert the Total Price to a number with (.) for thousands, and (,) for decimals.
//$total = number_format($total,',','.','.');

//Create a new PDF file
$pdf = new FPDF();
$pdf->AliasNbPages(); 

$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(15,6,'COD.',1,0,'L',1);
$pdf->SetX(30);
$pdf->Cell(90,6,'NOME',1,0,'L',1);
$pdf->SetX(120);
$pdf->Cell(35,6,'TELEFONE',1,0,'R',1);
$pdf->SetX(155);
$pdf->Cell(45,6,'CEM',1,0,'R',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(15,6,$column_code,0);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(90,6,$column_name,0);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(35,6,$column_tel,0,'R');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(155);
$pdf->MultiCell(45,6,$column_CEM,0,'R');

//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(15);
    $pdf->MultiCell(185,6,'',1);
    $i = $i +1;
}

$pdf->Output();

    exit;