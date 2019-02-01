 <?php 
  
  session_start();



  function autenticar($login, $senha) {

        $pdo = Banco::conectar();
        $sql = "SELECT idLogin, username, password FROM acesso where username = '$login'";

        //echo $sql;

        $exec =  $pdo->query($sql); 
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);

        if ($total > 0){ 

            $codigoUsuario = $rows[0]['idLogin'];

            $_SESSION['COD_USUARIO'] = $codigoUsuario;
        
            return $codigoUsuario;

            


        }
        else{

          $codigoUsuario = 0;

          return $codigoUsuario;

        }




  }

  function validarUsuario() {


    if (($_SESSION['COD_USUARIO'] != '')) {

       return $_SESSION['COD_USUARIO'];

    }
    else {

      header("location:login.php?getErro='Por favor, faça a autenticação'");

    }


  }