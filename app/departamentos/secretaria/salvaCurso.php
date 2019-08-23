<?php
# Informa qual o conjunto de caracteres será usado.
//header('Content-Type: text/html; charset=utf-8');

if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';

if (isset($_POST["curso"]))     $curso = $_POST["curso"];
if (isset($_POST["tema"]))     $tema = $_POST["tema"];
$date = ( isset($_POST['data']) ) ? $_POST['data'] : null;
$date = date("Y-m-d",strtotime(str_replace('/','-',$date)));
try{
        $pdo = Banco::conectar();
        $sql_= "INSERT INTO infocursos( nomeCursos, tema,data_) VALUES (:curso,:tema, :data_) ";

        $stmt = $pdo->prepare($sql_);
        $stmt->bindParam(':curso',$curso);
        $stmt->bindParam(':tema',$tema);
        $stmt->bindParam(':data_',$date);
        $stmt->execute();
        $pdo = null;

        echo json_encode(array("mens"=>"ok"));

} catch(PDOException $e){
    //echo '{"erro": {"texto": '.$e->getMessage().'}';
    echo '{"erro":'.$e->getMessage().'}';
}

?>