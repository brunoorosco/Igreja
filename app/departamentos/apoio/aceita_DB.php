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
   // $niver = date("Y-m-d",strtotime(str_replace('/','-',$nasc)));
    $aceitou = $_POST['aceitou'];
    $batizado = $_POST['TP_BATIZADO'];
    $fixo = $_POST['fixo'];
    $id = carrega_id_usuario();

   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
try{
       
      $sql = "INSERT INTO aceita_jesus (nome, telefone,  endereco, cem, aceit_reconc, cadastro, batizado, fixo, idade) 
      values (:nome, :telefone, :endereco,:supervisao, :aceitou, :cadastro, :batizado, :fixo, :idade)";
     
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':supervisao',$supervisao);
        $stmt->bindParam(':aceitou',$aceitou);
        $stmt->bindParam(':cadastro',$dataCadastro);
        $stmt->bindParam(':batizado',$batizado);
        $stmt->bindParam(':fixo',$fixo);
        $stmt->bindParam(':idade',$nasc);

        if( $stmt->execute()){
                 echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"4" ));


        }
    
    }catch(PDOException $e){

        //echo '{"erro": {"texto": '.$e->getMessage().'}';
      //  echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo json_encode(array('mens1' => $e->getMessage(),"mens2"=>"error","mens3"=>"4" ));
    }
    
    ?>
    