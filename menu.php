<?php
    if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    global $URLBASE;
    $URLBASE = "http://localhost/www/igreja/";
    //$URLBASE = "http://secretariacac.ga/";

    $url1 = $_SERVER['SERVER_ADDR'];

    //$URLBASE = "http://$url1/www/igreja/";

 ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="icon" href="<?= $URLBASE.'favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $URLBASE.'_fonts/css/bootstrap.min.css'?>">
    <style type="text/css">

    #conteudo { width: 500px; height: 300px;}

  /*  .dropdown-submenu {
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
*/
.dropdown-submenu {
position: relative;
}

.dropdown-submenu>.dropdown-menu {
top: 0;
left: 100%;
margin-top: -6px;
margin-left: -1px;
-webkit-border-radius: 0 6px 6px 6px;
-moz-border-radius: 0 6px 6px;
border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    

}

.dropdown-submenu>a:after {
display: block;
content: " ";
float: right;
width: 0;
height: 0;
border-color: transparent;
border-style: solid;
border-width: 5px 0 5px 5px;
border-left-color: #ccc;
margin-top: 5px;
margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
border-left-color: #000;
}

.dropdown-submenu.pull-left {
float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
left: -100%;
margin-left: 10px;
-webkit-border-radius: 6px 0 6px 6px;
-moz-border-radius: 6px 0 6px 6px;
border-radius: 6px 0 6px 6px;
}

</style>
</head>
<body>
<?php //echo ($_SESSION['supervisao']); ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning"  role="navigation">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="dropdown-item" href="<?= $URLBASE;?>"><i class="fa fa-home"> HOME</i></a>
                </li>
                <?php   if(isset($_SESSION['usuario'])){    ?>
                <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-church"> SEDE</i><b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cadastro</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/encontro/cad_Encontrista.php'?>">Encontrista</a></li>
                            <!--<li><a class="dropdown-item disabled" href="">Equipe</a></li>-->
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/cadastro.php'?>">Membro</a></li>
                           <!-- <li><a class="dropdown-item" href="<?= $URLBASE.'app/calendario/cadastroEvento.php'?>">Evento</a></li>-->
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Consulta</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/encontro/encontrista.php'?>">Encontristas</a></li>
                            <li><a class="dropdown-item" href="">Equipe</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/membros.php'?>">Membros</a></li>
                          </ul>
                        </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cursos</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/curso/Cursos.php'?>">Novo Curso</a></li>
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/'?>">Registrar Falta</a></li>
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/membros.php'?>">Informações de Curso</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Ministérios</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Aviva Jovem</a></li>
                        <li><a class="dropdown-item" href="#">Aviva Produções</a></li>
                        <li><a class="dropdown-item" href="#">Casais</a></li>      
                        <li><a class="dropdown-item" href="#">Homens em Ação</a></li>
                        <li><a class="dropdown-item" href="#">Kids</a></li>
                        <li><a class="dropdown-item" href="#">Mulheres em Ação</a></li>
                        <li><a class="dropdown-item" href="#">Obreiros</a></li>  

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Quatro Seres</a>
                            <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Dança</a></li>
                                        <li><a  class="dropdown-item" href="#">Levitas</a></li>
                                        <li><a class="dropdown-item" href="#">Teatro</a></li>
                               </ul>
                            </li>
                        </ul>
                        </li>

            <!--//  só vai acessar as pessoas que tiverem permissão de acesso a um dos grupos abaixo     -->

            <?php  if((isset($_SESSION['nivel'])) && ($_SESSION['nivel'] == '1') || ($_SESSION['nivel'] == '5') || ($_SESSION['nivel'] == '4')){ ?>         

                <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Secretária</a>
                    <ul class="dropdown-menu">
                    <?php  if($_SESSION['nivel'] == '1'){ ?> 
                        <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Administração Geral</a>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/painel_controle.php'?>">Painel de Controle</a></li>
                                 </ul>
                            </li>  <?php }?>
                   
                    <?php  if(($_SESSION['nivel'] == '1') || ($_SESSION['nivel'] == '4')){ ?>        
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/encontro.php'?>">Encontro</a></li><?php }?>
                    
                    <?php  if(($_SESSION['nivel'] == '1') || ($_SESSION['nivel'] == '5')){ ?>        
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Grupo de Apoio</a>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/apoio/aceita.php'?>">Aceitou/Reconciliou</a></li>
                                 </ul>
                            </li><?php }?>
                        </ul>
                    </li>             
                     <?php  } //finaliza o bloco anterior
                            $nivel = $_SESSION['nivel'];
                            if((isset($_SESSION['nivel'])) && ($nivel == '1')){ 
                           
                                ?>    

                <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle dropdown-item" data-toggle="dropdown">Relatórios</a>
                    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/aceitacao.php'?>">Aceitação/Reconciliação</a></li>
                            <li><a class="dropdown-item" href="#">Batismo</a></li>
                            <li><a class="dropdown-item" href="#">Pessoas Encontro</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/'?>">Equipe Encontro</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/aluno_curso.php'?>">Alunos x Curso</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/graficos.php'?>">Geral</a></li>
                        </ul>
                            </li>  <?php  }?>
              </ul>
            </li>
          <?php } ?>
            <li class="nav-item active" >
                <a class="dropdown-item" href="#"><i class="fa fa-bible"> IGREJAS</i></a>
            </li>
              </ul>
      </div>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown order-1">
            <?php

                if(isset($_SESSION['usuario'])){
                    echo "<i class='text-secondary fa fa-user'> ".($_SESSION['usuario'])."</i>";?>

                    <input type="button" class="btn btn-outline-secondary"  onclick="location.href='http://localhost/www/igreja/app/login/logout.php'" value="Sair"/>

                <?php
                         }
                      else {?>

                      <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Entrar <span class="caret"></span></button>
                  <?php     if(isset($_SESSION['msg_log']))
                                 echo( $_SESSION['msg_log']);} ?>


                <ul class="dropdown-menu dropdown-menu-right mt-2">
                   <li class="px-3 py-2">
                       <form class="form" role="form" id="for_login" method="post" action="<?= $URLBASE.'app/login/validaLogin.php'?>">
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
                                <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueceu a senha?</a></small>
                            </div>
                        </form>
                    </li>
                </ul>
            </li>
          </ul>
        </div>
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



<script src="<?= $URLBASE.'_fonts/js/jquery-3.3.1.min.js'?>"></script>
<script src="<?= $URLBASE.'_fonts/js/popper.min.js'?>"></script>
<script src="<?= $URLBASE.'_fonts/js/bootstrap.min.js'?>"></script>
<script src="<?= $URLBASE.'_fonts/js/main.js'?>"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

</body>
</html>
