<?php

require_once '../../_fonts/config/banco.php';

require_once '../../_fonts/config/funcoes.php';


  $login = $_POST['username'];
  $senha = $_POST['password'];


  $codigoUsuario = autenticar($login, $senha);
    
  echo $codigoUsuario;

  if ($codigoUsuario != 0) {

    header("location:../../home.php");

  }
  else {

    header("location:../../login.php?getErro='Usuário ou senha errados'");

  }


?>
