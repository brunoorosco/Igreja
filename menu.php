<?php
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta

 ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="http://localhost/www/igreja/_fonts/css/bootstrap.min.css">
    <style type="text/css">

    #conteudo { width: 500px; height: 300px;}

      .dropdown-submenu {
      position: relative;
      }

    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;
      top: .8em;
      }

    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: .1rem;
      margin-right: .1rem;
      }
      .marginBottom-0 {margin-bottom:0;}

</style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/www/igreja/"><i class="fa fa-home"> HOME</i></span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SEDE
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cadastro</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/www/igreja/app/encontro/cad_Encontrista.php">Encontristas</a></li>
                  <li><a class="dropdown-item disabled" href="">Equipe</a></li>
                  <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/cadastro.php">Membros</a></li>
                </ul>
              </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Consulta</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/encontro/encontrista.php">Encontristas</a></li>
                      <li><a class="dropdown-item" href="">Equipe</a></li>
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/membros.php">Membros</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Curso</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/curso/Cursos.php">Novo Curso</a></li>
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/php">Registrar Falta</a></li>
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/membros.php">Informações de Curso</a></li>
                    </ul>
                </li>
              </ul>
              </li>
              <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Ministérios
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/">Obreiros</a></li>
                     <li><a class="dropdown-item" href="#">Ministérios KIDS</a></li>
                     <li class="dropdown-item"   href="#">Quatros Seres</a></li>
                    <li class="dropdown-item" href="#">Consulta</a></li>
                     </ul>
                 </li>

              <li class="nav-item">
                <a class="nav-link disabled" href="#">Igrejas</a>
              </li>
              </ul>
      </div>
          <li class="dropdown order-1">
            <?php

                if(isset($_SESSION['usuario'])){
                    echo( $_SESSION['usuario']);?>

                    <input type="button" class="btn btn-outline-secondary " onclick="location.href='http://localhost/www/igreja/app/login/logout.php';"value="Sair"/>
                <?php
                         }
                      else {?>

                      <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Entrar <span class="caret"></span></button>
                  <?php     if(isset($_SESSION['msg_log']))
                        echo( $_SESSION['msg_log']);} ?>


                <ul class="dropdown-menu dropdown-menu-right mt-2">
                   <li class="px-3 py-2">
                       <form class="form" role="form" id="for_login" method="post" action="app/login/validaLogin.php">
                            <div class="form-group">
                                <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="" name="username">
                            </div>
                            <div class="form-group">
                                <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="" name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="form-group text-center">
                                <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                            </div>
                        </form>
                    </li>
                </ul>
            </li>
        </nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="http://localhost/www/igreja/_fonts/js/jquery-3.3.1.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/popper.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/bootstrap.min.js"></script>

</body>
</html>
