<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
   <link rel="stylesheet" href="_fonts/css/bootstrap.min.css">

    <script src="_fonts/js/jquery-3.3.1.js"></script>
    <script src="_fonts/js/popper.min.js"></script>
    <script src="_fonts/js/bootstrap.min.js"></script>

    <style type="text/css"> #conteudo { width: 400px; height: 300px;} </style> 
</head>
<body>    
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #ff8c00 !important;">
      <a class="navbar-brand" href="#" style="padding-right:  45px;">Secretária</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
         
          <li class="nav-item dropdown">
            <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sede
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" onclick="carregar('app/membros/cadastro.php')" href="#">Cadastro</a>
              <a class="dropdown-item" href="app/membros/membros.php">Membros</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Encontro/Reencontro</a>
            </div>
          </li> 

          <li class="nav-item dropdown">
            <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nossas Igrejas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Itaqua</a>
              <a class="dropdown-item" href="#">Sapopemba</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Guarulhos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
     <div class="container" id="conteudo">
     
   </div>

</body>

<script>
 function carregar(pagina){
        $("#conteudo").load(pagina);
</script>
</html>