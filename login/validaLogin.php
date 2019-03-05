<?php

require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


  $login = $_POST['username'];
  $senha = $_POST['password'];

  $_SESSION['username'] = $login;
  $_SESSION['loggedin_time'] = time();

  $codigoUsuario = autenticar($login, sha1($senha));

  echo $codigoUsuario;

  if ($codigoUsuario != 0) {

	   $_SESSION['msg_login'] = "<div class='alert alert-success' role='alert'>Curso alterado com sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    header("location:../../index.php");

  }
  else {
    $_SESSION['msg_login'] = "<div class='alert alert-danger' role='alert'>usuario não registradoo!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
   header("location:../../index.php");

//    header("location:login.php?getErro='Usuário ou senha errados'");

  }


?>
