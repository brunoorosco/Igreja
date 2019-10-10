<?php
include_once($_SERVER['DOCUMENT_ROOT']."/www/igreja/_fonts/config/banco.php");
include_once($_SERVER['DOCUMENT_ROOT']."/www/igreja/_fonts/config/funcoes.php");
   
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

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $URLBASE.'_fonts/css/menu.css'?>">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
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
                           <!-- <li><a class="dropdown-item" href="<?= $URLBASE.'app/encontro/cad_Encontrista.php'?>"></a></li>
                            <li><a class="dropdown-item disabled" href="">Equipe</a></li>-->
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/cadastro.php'?>">Membro</a></li>
                           <!-- <li><a class="dropdown-item" href="<?= $URLBASE.'app/calendario/cadastroEvento.php'?>">Evento</a></li>-->
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Consulta</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/encontro/encontrista.php'?>">Encontristas</a></li>
                            <li><a class="dropdown-item" href="">Equipe</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/membros.php'?>">Membros</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/cem/minhacem.php'?>">Minha CEM</a></li>
                          </ul>
                        </li>
                       
                        <!--//  só vai acessar as pessoas que tiverem permissão de acesso a um dos grupos abaixo     -->

            <?php  if((isset($_SESSION['nivel'])) && ($_SESSION['nivel'] == '1') || ($_SESSION['nivel'] == '4')){ ?>  
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cursos</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/curso/Cursos.php'?>">Cursos</a></li>
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/'?>">Registrar Falta</a></li>
                      <li><a class="dropdown-item" href="<?= $URLBASE.'app/membros/membros.php'?>">Informações de Curso</a></li>
                    </ul>
                </li>
            <?php } ?>
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
                                <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/bat.php'?>">Batizado</a></li>
                                <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/historico.php'?>">Histórico de Cursos</a></li>
                                <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/painel_controle.php'?>">Painel de Controle</a></li>
                                <li><a class="dropdown-item" href="<?= $URLBASE.'app/departamentos/secretaria/consultaCursos.php'?>">Consulta de Cursos</a></li>

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
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/aceitacao.php'?>">Geral</a></li>
                          <!--  <li><a class="dropdown-item" href="#">Batismo</a></li>
                            <li><a class="dropdown-item" href="#">Pessoas Encontro</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/'?>">Equipe Encontro</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/aluno_curso.php'?>">Alunos x Curso</a></li>
                            <li><a class="dropdown-item" href="<?= $URLBASE.'app/relatorio/graficos.php'?>">Geral</a></li>-->
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
                    echo "<a  class='perfil_modal' href='#' data-toggle='modal' data-target='#perfilModal'><i class='text-secondary fa fa-user'> ".($_SESSION['usuario'])."</i></a>";?>

                    <input type="button" class="btn btn-outline-secondary" onclick="location.href='<?= $URLBASE.'app/login/logout.php'?>'" value="Sair"/>

                <?php
                         }
                      else {?>

                      <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Entrar <span class="caret"></span></button>
                  <?php     if(isset($_SESSION['msg_login_']))
                                 echo( $_SESSION['msg_login_']);} ?>


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
                <h3>Esqueceu sua senha</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form method="post" action="./app/membros/atualizar_senha.php">
             <div class="form-row align-items-center">
             <label>Insira seu e-mail de cadastro!!!</label>
             <div class="col-sm-12 my-1">
             <label class="sr-only" for="email_perfil">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="txtemail" placeholder="Username" style="with:100px">
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
                <button class="btn btn-primary" name="submit">Redefinir senha</button>
            </div></form>
        </div>
    </div>
</div></div>

<div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
			  	<div class="modal-content">
			  		<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="perfilModalLabel">Meu Cadastro</h4>
			  		</div>
			  	    <div class="modal-body">                     
                            <div class="row justify-content-md-center">
                                <form  method="POST" action="">
                                    <div class="form-group">
                                        <label for="nome" class="control-label">Nome</label>
                                        <input name="nome" type="text" class="form-control" id="nome_cad">
                                            </div>
                                    <div class="form-group">
                                        <label for="endereco" class="control-label">Endereço</label>
                                        <input name="endereco" class="form-control" id="endereco_cad" type="text">
                                    </div>
                                    <div class="form-group input-group justify-content-between">
                                        <div class="">
                                            <label for="niver" class="control-label">Aniversario</label>
                                            <input name="niver" class="form-control data" id="niver_cad">
                                        </div>
                                        
                                        <div class="">
                                            <label for="telefone" class="control-label">Telefone</label>
                                            <input name="telefone" class="form-control tel" id="tel_cad">
                                        </div>
                                    </div>

                                    <div  class="form-group">
                                            <label for="cem" class="control-label">C.E.M.</label>
                                            <input name="cem" class="form-control" id="cem_cad">
                                    </div>

                                    <div  class="form-group" >
                                            <label for="telefone" class="control-label">E-m@il</label>
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                                 <input type="text" class="form-control" id="email_cad" name="txtemail" placeholder="Email" >
                                            </div>
                                    </div>
                                    
                                    <div class="form-group input-group justify-content-between">
                                        <div class="">
                                            <label for="nova_senha" class="control-label">Nova Senha</label>
                                            <input name="nova_senha" class="form-control validate" autocomplete="off" minlength="6" maxlength="15"  required  type="password" id="senha">
                                        </div>
                                        
                                        <div class="">
                                            <label for="repete_senha" class="control-label">Repita Senha</label>
                                            <input name="repete_senha" class="form-control" autocomplete="off" minlength="6" maxlength="15"  required type="password" id="senha2" onkeyUp="validarSenha('senha', 'senha2');">
                                        </div>
                                    </div>
                                    
                                    <br>

                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                                <button class="btn btn-success">Editar</button>
                                            
                                        </div>
                                </form>
                           </div>
                         </div>
                     </div>
                </div>
                              
            </div></div>


<!--<script src="<?= $URLBASE.'_fonts/js/jquery-3.3.1.min.js'?>"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--<script src="<?= $URLBASE.'_fonts/js/popper.min.js'?>"></script>
<script src="<?= $URLBASE.'_fonts/js/bootstrap.min.js'?>"></script>-->
<script src="<?= $URLBASE.'_fonts/js/main.js'?>"></script>
<script type="text/javascript" src="<?= $URLBASE.'/_fonts/js/jquery.mask.min.js'?>"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
           function validarSenha(name1, name2)
{
    var senha1 = document.getElementById(name1).value;
    var senha2 = document.getElementById(name2).value;
	    if (senha1 != "" && senha2 != "" && senha1 === senha2)
            {
                
                $('#senha2').css('border', 'solid 3px rgba(1, 150, 1, 0.70)');
            }
            else
            {
            
           //     $('#senha2').css('border-color','rgba(250, 1, 1, 0.50)');
                $('#senha2').css('border', 'solid 3px rgba(250, 1, 1, 0.50)');
                
                //alert('senhas diferentes');
            }
        }
mascara();
            </script>       

</body>
</html>
