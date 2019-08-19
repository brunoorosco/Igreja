<?php

if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$nome = $_GET['nome'];
$status_ = $_GET['status_'];

$pdo = Banco::conectar();
$data = array();
$sql_= "INSERT INTO historico(nome, status_) VALUES (:nome, :status_) ";

$stmt = $pdo->prepare($sql_);
$stmt->bindParam(':membro',$nome);
$stmt->bindParam(':encontro',$status_);
$stmt->execute();
$pdo = null;

echo json_encode(array("mens"=>"cadastrado"));

// print ($data[0]);
//   print json_encode($data);

?>