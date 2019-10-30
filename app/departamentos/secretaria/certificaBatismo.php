<?php


		include_once("../../../_fonts/config/banco.php");
		include_once("../../../_fonts/config/funcoes.php");
		include_once("../../../menu.php");
         include_once("./func_sec.php");
        validarUsuario();
	//	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
		if(($_SESSION['nivel'] != '1') && ($_SESSION['nivel'] != '4'))
		{
			$_SESSION['msg_log'] = "<div id='message' class='alert alert-danger' role='alert'>Você não permissão para acessar esta página!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					header("Location: $URLBASE");	
		}

?>
