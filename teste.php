<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

   <link rel="stylesheet" href="_fonts/css/bootstrap.min.css">



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
</style>

</head>
<body>

    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ff8c00 !important;">-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Hidden brand</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sede
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/membros.php">Membros</a></li>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cadastros</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/encontro/cad_Encontrista.php">Encontrista</a></li>
                      <li><a class="dropdown-item" href="#">Equipe</a></li>
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/cad1.php">Membro</a></li>
                      <li><a class="dropdown-item" href="">Cursos</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Consultas</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/encontro/cad_Encontrista.php">Encontrista</a></li>
                      <li><a class="dropdown-item" href="#">Equipe</a></li>
                      <li><a class="dropdown-item" href="http://localhost/www/igreja/app/membros/cad1.php">Membro</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Ministérios</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    </nav>

<script src="_fonts/js/jquery-3.3.1.js"></script>
<script src="_fonts/js/popper.min.js"></script>
<script src="_fonts/js/bootstrap.min.js"></script>
<script src="_fonts/js/main.js"></script>
</body>
</html>
