
<?php
 header("Content-type: text/html; charset=utf-8");
 require_once '../../_fonts/config/banco.php';
 require_once '../../_fonts/config/funcoes.php';
 if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
      $senha = $_POST['senha'];
      $senhaCrip = sha1($senha);

      $sql_ = "INSERT INTO acesso (username, password, idmembro) values (:email, :senha, :idmembro)";
            
           // if($cargo == "Bispo" || "Pastor" || "Supervisor"){
           // $senha = (geraSenha(6, false, true));
           // $senha1 = sha1($senha);
    try{

           $db = new db();
           $db = $db->connect();
           $stmt = $db->prepare($sql_);
           $stmt->bindParam(':email',$_SESSION['email']);
           // $stmt->bindParam(':senha',$senha1);
           // $stmt->execute();
            $stmt->bindParam(':senha',$senhaCrip);
            $stmt->bindParam(':idmembro',$_SESSION['ultimo_id']);
            $stmt->execute();
            $db = null;
          //     }
           session_unset( $_SESSION['ultimo_id']);
           session_unset( $_SESSION['email']);
          //  enviarEmail($email,$senha);
          echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"4" ));
      

    
    }catch(PDOException $e){

        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }

?>
