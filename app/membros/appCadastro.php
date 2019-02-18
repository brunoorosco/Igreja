<?php
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


    //$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    if($_POST){
       echo "enviado1";
     }

     if(count($_POST)>0){
       echo "enviado2";
     }

     if(isset($_POST['botaoSubmit'])){
       echo "enviad3";
     }

     if( $_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome= $_POST['nome'];
        echo $nome;
    }

    //$sql_ = "INSERT INTO teste (nome) values (:nome)";
    $sql_ = "INSERT INTO testeApp (nome) values (:nome)";
    try{

        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql_);
        $stmt->bindParam(':nome',$nome);
        $stmt->execute();
        $db = null;

       echo "cadastrado com sucesso";

    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


	?>
