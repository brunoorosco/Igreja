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
  /*
    $dados = $pdo->prepare("SELECT nome_cem FROM cem WHERE nome_cem LIKE '%".$procura."%' AND status = 1 ORDER BY nome_cem ASC");
    $dados->execute();
    echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));*/

    $query = $pdo->prepare("SELECT DISTINCT nome FROM historico WHERE nome LIKE '%".$procura."%' ORDER BY nome ASC LIMIT 8");
    $query->execute();  
    // Generate array with skills data
    $data = array();
    if($query->rowCount()>0){
          while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
                $data[] = $row['nome']; 
                } 
            }
                else 
                $data[] = "Nenhum Registro";
  
    
// Return results as json encoded array 
echo json_encode($data); 
?>