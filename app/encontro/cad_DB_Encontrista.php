<?php
header("Content-type: text/html; charset=utf-8");
require_once '../../_fonts/config/banco.php';


    $nomeEnc = $_POST['nome'];
    $telEnc = $_POST['telefone'];
    $emailEnc = $_POST['email'];
    $telEncamigo1 = $_POST['tel1'];
    $telEncamigo2 = $_POST['tel2'];
    $endEnc = $_POST['endereco'];
    $sexoEnc = $_POST['sexo'];
    $nascEnc = $_POST['nascimento'];
   // $CEM = $_POST['CEM'];
    $nascEnc = date("Y-m-d",strtotime(str_replace('/','-',$nascEnc)));


   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
       $sql = "SELECT * FROM encontrista where emailEnc = '$emailEnc' OR telEnc = '$telEnc'";
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


    $sql = "INSERT INTO encontrista (nomeEnc, telEnc , telEncamigo1, telEncamigo2 , endEnc, emailEnc , nascEnc,sexoEnc) values (:nomeEnc , :telEnc , :telEncamigo1, :telEncamigo2 , :endEnc, :emailEnc , :nascEnc , :sexoEnc )";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nomeEnc',$nomeEnc);
        $stmt->bindParam(':telEnc',$telEnc);
        $stmt->bindParam(':telEncamigo1',$telEncamigo1);
        $stmt->bindParam(':telEncamigo2',$telEncamigo2);
        $stmt->bindParam(':endEnc',$endEnc);
        $stmt->bindParam(':emailEnc',$emailEnc);
        $stmt->bindParam(':nascEnc',$nascEnc);
        $stmt->bindParam(':sexoEnc',$sexoEnc);
        $stmt->execute();
        $db = null;

         echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
    //   echo = "<meta http-equiv='Refresh' content='0;URL='cadastro.php'>";
   // echo "<script>alert('$nome, o cadastro foi realizado com sucesso! Obrigado!!!');";//window.location='menu.html';</script>";


    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }}

?>
