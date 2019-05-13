<?php
  
  include_once("../../_fonts/config/banco.php");
	include_once("../../_fonts/config/funcoes.php");
  include_once "../../menu.php";

    

if(isset($_POST['submit']))
{
    $senha = geraSenha(6, false, true);
    $senhaCRIP= sha1($senha);
    $user = $_POST['txtemail'];
    
try {
  $pdo = Banco::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('UPDATE acesso SET password = :senha WHERE username = :username');
  $stmt->execute(array(
    ':username'   => $user,
    ':senha' => $senhaCRIP
  ));
     
  if( $stmt->rowCount() > 0)
  {
        enviarEmail($user,$senha);
        $_SESSION['msg_log'] = "<script>	Swal.fire({
          title: 'Senha enviada com Sucesso!',
                  type: 'success',
                  timer: 5000});</script>";
        header("location:../../");exit;
  }
 else
  {
        enviarEmail($user,$senha);
        $_SESSION['msg_log'] = "<script>	Swal.fire({
          title: 'Este email não esta cadastrado em nosso sistema!!!',
                  type: 'error',
                  timer: 5000});</script>";
        header("location:../../");exit;
  }
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}}
?>

<!--
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="icon" href="<?= $URLBASE.'favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

   
 </head>   
    <body>
        <div class="container">
             <form method="post" action="">
             <div class="form-row align-items-center">
             <div class="col-sm-4 my-1">
             <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="txtemail" placeholder="Username" style="with:100px">
                </div>
              </div>
              <div class="col-auto my-1">
                <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </div>
                </div>
       </form>
        </div>
    </body>
</html>-->
      
   
