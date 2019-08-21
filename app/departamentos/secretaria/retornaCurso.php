<?php
//setting header to json
//header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';

header('Content-Type: json; charset=utf-8');

# Informa qual o conjunto de caracteres será usado.

// Get search term 
$procura = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
 
    
    $pdo = Banco::conectar();
 
    $query = $pdo->prepare("SELECT tema, data_ FROM infocursos WHERE tema LIKE '%".$procura."%' ORDER BY tema ASC LIMIT 8");
    $query->execute();  
    // Generate array with skills data
    $data = array();
    if($query->rowCount()>0){
          while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
                $data[] = $row['tema']; 
               // $data[] = $row['tema']." (". date("d/m/Y",strtotime(str_replace('-','/',$row['data_']))).")"; 
               
                } 
            }
                else 
                $data[] = "Nenhum Registro";
  
    
// Return results as json encoded array 
echo json_encode($data); 
?>