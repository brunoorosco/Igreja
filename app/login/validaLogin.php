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

    header("location:../../index.php");

  }
  else {

    header("location:login.php?getErro='Usuário ou senha errados'");

  }


?>
