<?php
  
  include_once("../../../_fonts/config/funcoes.php");
  include_once('../../../_fonts/config/banco.php');
  include_once("../../../menu.php");
  
  validarUsuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Secretaria Encontro</title>

   <style> 
  
    /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 200px; 
        margin: 10px 10px 10px 10px;
        border-radius: 8px; 
        background-color: lightgrey;
          width: 200px;
          height: 200px; } 

        .my-tab {
          height: 100%;
          color: #5e5e5e;
          }

          a.fill-div {
          text-align: center;
          display: block;
          height: 100%;
          width: 100%;
          text-decoration: none;
          }
   
  </style>

</head>

<body>
 <!-- Tabs Right -->
<div class='tabs-x tabs-right tabs-krajee'>
    <ul id="myTab-tabs-right" class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="home-tab-tabs-right" href="#home-tabs-right" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i
                class="fa fa-home"></i> Home</a></li>
        <li class="nav-item"><a class="nav-link" id="profile-tab-tabs-right" href="#profile-tabs-right" role="tab-kv" data-toggle="tab" aria-controls="profile"><i class="fa fa-user"></i>
            Profile</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="myTabDrop-tabs-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                    class="fa fa-list-alt"></i> Menu</a>
            <div class="dropdown-menu" role="menu" aria-labelledby="myTabDrop-tabs-right">
                <a class="dropdown-item" id="dropdown-tab-tabs-right-1" href="#dropdown-tabs-right-1" tabindex="-1" role="tab" data-toggle="tab" aria-controls="dropdown-tabs-right-1">
                    <i class="fas fa-chevron-circle-right"></i> Option 1</a>
                <a class="dropdown-item" id="dropdown-tab-tabs-right-2" href="#dropdown-tabs-right-2" tabindex="-1" role="tab" data-toggle="tab" aria-controls="dropdown-tabs-right-2">
                    <i class="fas fa-chevron-circle-right"></i> Option 2</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link disabled" id="disabled-tab-tabs-right" href="#disabled-tabs-right"><i class="fa fa-knight"></i> Disabled</a></li>
    </ul>
    <div id="myTabContent-tabs-right" class="tab-content">
        <div class="tab-pane fade show active" id="home-tabs-right" role="tabpanel" aria-labelledby="home-tab-tabs-right"><p>...</p></div>
        <div class="tab-pane fade" id="profile-tabs-right" role="tabpanel" aria-labelledby="profile-tabs-right"><p>...</p></div>
        <div class="tab-pane fade" id="dropdown-tabs-right-1" role="tabpanel" aria-labelledby="dropdown-tab-tabs-right-1"><p>...</p></div>
        <div class="tab-pane fade" id="dropdown-tabs-right-2" role="tabpanel" aria-labelledby="dropdown-tab-tabs-right-2"><p>...</p></div>
        <div class="tab-pane fade" id="disabled-tabs-right" role="tabpanel" aria-labelledby="disabled-tab-tabs-right">Disabled Content</div>
    </div>
</div>

<script src="./equipe.js"></script>
<script>
    carregar_membros();
  

</script>
</body> 
</html> 