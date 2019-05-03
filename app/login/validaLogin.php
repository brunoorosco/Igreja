<?php
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


///-----  Recebe dadods via POST do usuario e senha ---////////////////////////////
  $login = addslashes($_POST['username']);// addslashes - garante maior segurança
  $senha = addslashes($_POST['password']);// addslashes - garante maior segurança

  $_SESSION['username'] = $login;
  $_SESSION['loggedin_time'] = time();


  $codigoUsuario = autenticar($login, sha1($senha));

  $_SESSION['codigoUsuario'] = $codigoUsuario;

  if ($codigoUsuario != 0) {


	 //  $_SESSION['msg_login'] = "<div class='alert alert-success' role='alert'>Logado com sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	   $_SESSION['msg_log'] = "<script>	Swal.fire({
                title: 'Login efetuado com sucesso!',
                        type: 'success',
                        timer: 5000});</script>";
     header("location:../../?id=".$_SESSION['codigoUsuario']."");exit;

  }
  else {
    session_unset();
  //  $_SESSION['msg_login'] = "<div class='alert alert-danger' role='alert'>Usuario não registrado!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    $_SESSION['msg_log'] = "<script>	Swal.fire({
               title: 'Acesso Negado!',
                       type: 'error',
                       timer: 5000});</script>";
   header("location:../../");exit;

//    header("location:login.php?getErro='Usuário ou senha errados'");

  }


?>
