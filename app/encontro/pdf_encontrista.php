<?php
  include '../../_fonts/config/banco.php';
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../../_fonts/dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

  $pdo = Banco::conectar();
  $sql = 'SELECT * FROM encontrista ORDER BY sexoEnc ASC, nomeEnc ASC';
  $i =1;

          $html = '<div class="container">';
          $html .= '</br>';
          $html .= '<div class="page-header">';
          $html .= '<h3>Lista de Encontrista - Encontro n</h3></div></br>';
          $html .= '<div class="row text-center">';
          $html .=   '<div class="col-md-12 table-responsive">';
          $html .=  '<table class="table table-striped table-sm table-hover text-center">';
          $html .= '<thead >';
          $html .= '<tr>';
          $html .= '<th width=75px>Cód</th>';
          $html .= '<th width=300px>Nome</th>';
          $html .= '<th width=200px>Telefone</th>';
          $html .= '<th width=150px>CEM</th>';
          $html .= '</tr>';
          $html .= '</thead>';
          foreach($pdo->query($sql)as $row)
          {
                          $html .= '<tbody>';
                              $html .= '<tr>';
                                  $html .= '<th>'.$i++.'</th>';
                                  $html .= '<th class="text-left" scope="row">'. $row['nomeEnc'].'</th>';
                                  $html .= '<td>'. $row['telEnc'] .'</td>';
                                  $html .= '<td>'. $row['CEM'].'</td>';
                              $html .=  '</th>';
                          $html .= '</tbody>';
              }
                      $html .= ' </table></div></div>';

	// Carrega seu HTML
$dompdf->load_html($html);
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"encontro.pdf",
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="icon" href="<?= $URLBASE.'favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $URLBASE.'_fonts/css/bootstrap.min.css'?>">
    <style type="text/css">
    </head>
  
