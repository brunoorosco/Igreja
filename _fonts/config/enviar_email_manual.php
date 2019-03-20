<?php
 require_once 'banco.php';
 require_once 'funcoes.php';

    $email = $_POST['email'];
    
      $senha = (geraSenha(6, false, true));
      $senhaCrip = sha1($senha);

    $sql_ = "INSERT INTO acesso (username, password) values (:email, :senha)";
    
    try{

        //if($cargo == "Bispo" || "Pastor" || "Supervisor"){
        // $senha = (geraSenha(6, false, true));
        // $senha1 = sha1($senha);
        
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql_);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':senha',$senhaCrip);
        $stmt->execute();
        $db = null;
                            //}
        enviarEmail($email,$senha);
        
            echo json_encode(array('mens1' => "Email enviado com sucesso!","mens2"=>"success","mens3"=>"1" ));
        
       
    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }

?>
