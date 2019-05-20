<?php

require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';





    $nomeEnc = $_POST['nome'];
    $telEnc = $_POST['telefone'];
    $obser = $_POST['obser'];
    $endEnc = $_POST['endereco'];
    $sexoEnc = $_POST['sexo'];
    $cem_geral = $_POST['cem'];
    $CEM = carrega_dados();
    $n_encontro = encontro();
    //$nascEnc = date("Y-m-d",strtotime(str_replace('/','-',$nascEnc)));


   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
       $sql = "SELECT * FROM encontrista where telEnc = '$telEnc'";
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $exec =  $pdo->query($sql);
       $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
       $total = count($rows);
       Banco::desconectar();

        if ($total > 0){
             echo json_encode(array('mens1' => "Este Encontrista já esta cadastrado!","mens2"=>"warning","mens3"=>"0" ));
                }
      else{


        $sql = "INSERT INTO encontrista (nomeEnc, telEnc , observacao , endEnc, sexoEnc, CEM) values (:nomeEnc , :telEnc , :obser , :endEnc, :sexoEnc, :cem )";
        $sql_ = "INSERT INTO encontro (n_encontro, encontrista) values (:n_encontro , :encontrista)";
       
       try{
           $db = new db();
           $db = $db->connect();
           $stmt = $db->prepare($sql);
           $stmt->bindParam(':nomeEnc',$nomeEnc);
           $stmt->bindParam(':telEnc',$telEnc);
           $stmt->bindParam(':obser',$obser); 
           $stmt->bindParam(':endEnc',$endEnc);
           $stmt->bindParam(':sexoEnc',$sexoEnc);
           $stmt->bindParam(':cem',$cem_geral);
             if( $stmt->execute()){
   
               $id = $db->lastinsertId();
             //  $db = new db();
              // $db = $db->connect();
               $stmt = $db->prepare($sql_);
               $stmt->bindParam(':n_encontro',$n_encontro);
               $stmt->bindParam(':encontrista',$id);
               $stmt->execute();
               $db = null;
       
            echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
             }
       }catch(PDOException $e){
           //echo '{"erro": {"texto": '.$e->getMessage().'}';
           echo '{"erro": {"texto": '.$e->getMessage().'}';
       }
   }

?>
