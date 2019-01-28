<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="css/estilo.css" rel="stylesheet"/>
    
    <link rel="stylesheet" type="text/css" href="_fonts/css/bootstrap.min.css">
    <link href="_fonts/css/simple-sidebar.css" rel="stylesheet">
    
    
    <script type="text/javascript" src="_fonts/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="_fonts/js/jquery-3.3.1.js"></script>
<style>

.dropbtn {
  background-color: #ff8c00;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
    font:normal 100%/1.6 sans-serif;
  font-weight: 600;
}

.dropdown {
  position: relative;
  display: inline-block;
   font:normal 100%/1.4 sans-serif;
  font-weight: 600;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #2e9afe;
}
</style>
</head>
<body>


<section id="header">
      <nav class="navbar navbar-justified navbar-light" style="background-color: #ff8c00;">
          <span class="navbar-brand mb-0 h1 ">Secretária</span>
          <div class="dropdown">
            <button class="dropbtn">Sede</button>
              <div class="dropdown-content">
              <a onclick="carregar('cadastro.php')" href="#">Cadastro</a>
              <a onclick="carregar('membros.php')" href="#">Membros</a> 
              <a onclick="carregar('cadastroEncontro.php')" href="#">Encontro/Reencontro</a> 
              <a href="#">Homens em Ação</a>
              <a href="#">Ministério Kids</a>
              <a href="#">Min. de Obreiros</a>
              <a href="#">Mulheres em Ação</a>
              </div>
           </div>
           <div class="dropdown">
            <button class="dropbtn">Sapopemba</button>
              <div class="dropdown-content">
              
              </div>
           </div>
           <div class="dropdown">
            <button class="dropbtn">Guarulhos</button>
              <div class="dropdown-content">
              
              </div>
           </div>
           <div class="dropdown">
            <button class="dropbtn">Itaqua</button>
              <div class="dropdown-content">
              
              </div>
           </div>
            <div class="dropdown">
            <button class="dropbtn">Jd. Danfer</button>
              <div class="dropdown-content">
             
              </div>
           </div>
            <div class="dropdown">
            <button class="dropbtn">Curuça</button>
              <div class="dropdown-content">
             
              </div>
           </div>
           <div class="dropdown">
            <button class="dropbtn">Suzano</button>
              <div class="dropdown-content">
             
              </div>
           </div>
           <div class="dropdown">
            <button class="dropbtn">Curitiba</button>
              <div class="dropdown-content">
             
              </div>
           </div>
      </nav>
    
  </section>
   
   <div class="container" id="conteudo">
     
   </div>

<script>
    function carregar(pagina){
        $("#conteudo").load(pagina);
    }
</script>
</body>
</html>