<?php
header("Content-type: text/html; charset=utf-8");
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


    $nomeEnc = $_POST['nome'];
    $telEnc = $_POST['telefone'];
    $obser = $_POST['obser'];
    $endEnc = $_POST['endereco'];
    $sexoEnc = $_POST['sexo'];
    $cem_geral = $_POST['cem'];
    $CEM = carrega_dados();
    //$nascEnc = date("Y-m-d",strtotime(str_replace('/','-',$nascEnc)));


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


    $sql = "INSERT INTO encontrista (nomeEnc, telEnc , observacao, endEnc, sexoEnc, CEM) values (:nomeEnc , :telEnc , :obser, :endEnc, :sexoEnc, :CEM )";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nomeEnc',$nomeEnc);
        $stmt->bindParam(':telEnc',$telEnc);
        $stmt->bindParam(':obser',$obser);
        $stmt->bindParam(':endEnc',$endEnc);
        $stmt->bindParam(':sexoEnc',$sexoEnc);
        $stmt->bindParam(':CEM',$CEM);
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
