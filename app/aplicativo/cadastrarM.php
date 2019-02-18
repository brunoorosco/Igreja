<?php
 require_once '../../_fonts/config/banco.php';

 require_once '../../_fonts/config/funcoes.php';



    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $endereco = $_POST['endereco']; 
    $nasc = $_POST['aniversario'];
    $supervisao = $_POST['cem'];
    $nasc = date("Y-m-d",strtotime(str_replace('/','-',$nasc)));  
   
   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO ///////////
       $sql = "SELECT * FROM membros where email = '$email'";
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $exec =  $pdo->query($sql); 
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);
        Banco::desconectar();

        if ($total > 0){ 
         //   echo "Este membro já esta Cadastrado!!!";
            echo 1;
                }
      else{

      $senha = (geraSenha(6, false, true));
      $senhaCrip = sha1($senha);
    


    $sql = "INSERT INTO membros (nome, telefone, email, nasc, cargo, endereco, supervisao) values (:nome, :telefone, :email, :nasc, :cargo, :endereco,:supervisao)";

    $sql_ = "INSERT INTO acesso (username, password) values (:email, :senha)";
    
    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':nasc',$nasc);
        $stmt->bindParam(':cargo',$cargo); 
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':supervisao',$supervisao);
        $stmt->execute();
        $db = null;
        

        if($cargo == "Bispo" || "Pastor" || "Supervisor"){
       // $senha = (geraSenha(6, false, true));
       // $senha1 = sha1($senha);
        
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql_);
        $stmt->bindParam(':email',$email);
     //   $stmt->bindParam(':senha',$senha1);
       // $stmt->execute();
        $stmt->bindParam(':senha',$senhaCrip);
        $stmt->execute();
        $db = null;
                            }
      //  enviarEmail($email,$senha);
  echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
        
       
    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }

}
	?>
