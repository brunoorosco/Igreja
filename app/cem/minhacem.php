<?php

	  include_once "../../_fonts/config/banco.php";
      include_once "../../menu.php";
 
      //validarUsuario();

    if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    if(($_SESSION['nivel'] != '1') && ($_SESSION['nivel'] != '4'))
    {
        $_SESSION['msg_log'] = "<div id='message' class='alert alert-danger' role='alert'>Você não permissão para acessar esta página!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                header("Location: http://localhost/www/igreja/");	
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Relatório</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href="./stylecem.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
       
         </head>
    <body>
 <div class="container-fluid rounded" id="faixa">
          <h2 class="text-center text-white">Minha CEM</h2>
 </div>

    <div class="container-box">
            <div class="box a" id="membrosCEM"> <h5 class="text-center">Membros</h5></div>
            <div class="box b"><h5 class="text-center">Discipulado</h5></div>
            <div class="box c"><h5 class="text-center">Último Encontro</h5></div>
            <div class="box d"><h5 class="text-center">Último Encontro</h5></div>
            <div class="box e"><h5 class="text-center">Último Encontro</h5></div>
            <div class="box f"><h5 class="text-center">Escola de Profeta</h5></div>
            <div class="box g"><h5 class="text-center">Relatório</h5></div>
    </div>
  

         
     <script>
            window.onload = function() {
        cem();
            
            
    }

    </script> 


      <script src="./cem.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>

    </body>
    </html>