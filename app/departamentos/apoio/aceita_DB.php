<?php
 header("Content-type: text/html; charset=utf-8");
 require_once '../../../_fonts/config/banco.php';
 require_once '../../../_fonts/config/funcoes.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cargo = $_POST['cargo'];
    $endereco = $_POST['endereco'];
    $nasc = $_POST['nascimento'];
    $supervisao = $_POST['supervisao'];
    $dataCadastro = date("Y-m-d",strtotime(str_replace('/','-',$_POST['cadastro'])));
    $niver = date("Y-m-d",strtotime(str_replace('/','-',$nasc)));
    $aceitou = $_POST['aceitou'];
    $id = carrega_id_usuario();

   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
try{
       
      $sql = "INSERT INTO aceitouJesus (nome, telefone, cargo, endereco, cem, cadastrado, aceit_reconc, cadastro) 
      values (:nome, :telefone, :cargo, :endereco,:supervisao, :cadastrado, :aceitou, :cadastro)";
     
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':cargo',$cargo);
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':supervisao',$supervisao);
        $stmt->bindParam(':cadastrado',$id);
        $stmt->bindParam(':aceitou',$aceitou);
        $stmt->bindParam(':cadastro',$dataCadastro);

        if( $stmt->execute()){
                 echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"4" ));


        }
    
    }catch(PDOException $e){

        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }
    
    ?>
    