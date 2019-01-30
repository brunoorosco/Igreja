<?php
 require_once '../../_fonts/config/banco.php';


    $nomeEnc = $_POST['nome'];
    $telEnc = $_POST['telefone'];
    $emailEnc = $_POST['email'];
    $telEncamigo1 = $_POST['tel1'];
    $telEncamigo2 = $_POST['tel2'];
    $endEnc = $_POST['endereco']; 
    $cpfEnc = $_POST['cpf'];
    $nascEnc = $_POST['nascimento'];
   // $CEM = $_POST['CEM'];
    $nascEnc = date("Y-m-d",strtotime(str_replace('/','-',$nascEnc)));  
    

    $sql = "INSERT INTO encontrista (nomeEnc, telEnc , telEncamigo1, telEncamigo2 , endEnc, emailEnc , nascEnc,cpfEnc) values (:nomeEnc , :telEnc , :telEncamigo1, :telEncamigo2 , :endEnc, :emailEnc , :nascEnc , :cpfEnc )";

    
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
        $stmt->bindParam(':cpfEnc',$cpfEnc);
        //$stmt->bindParam(':CEM',$CEM);
        $stmt->execute();
        $db = null;
    
    //   echo = "<meta http-equiv='Refresh' content='0;URL='cadastro.php'>";
   // echo "<script>alert('$nome, o cadastro foi realizado com sucesso! Obrigado!!!');";//window.location='menu.html';</script>";
      

    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }

?>