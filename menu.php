<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

   <link rel="stylesheet" href="http://localhost/www/igreja/_fonts/css/bootstrap.min.css">
    <style type="text/css">

    #conteudo { width: 400px; height: 300px;}

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
    <a class="navbar-brand" href="#">Secretária     -     </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/www/igreja/">Home <span class="sr-only">(current)</span></a>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<script src="http://localhost/www/igreja/_fonts/js/jquery-3.3.1.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/popper.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/bootstrap.min.js"></script>


</body>

</html>
