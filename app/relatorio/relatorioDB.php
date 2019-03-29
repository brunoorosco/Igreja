<?php
//setting header to json
header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';



//é preciso contar a quantidade de registros dentro do mes para carregar o grafico
$query = sprintf("SELECT playerid, score FROM score ORDER BY playerid");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}



//imprime em formato json para o js
print json_encode($data);

?>