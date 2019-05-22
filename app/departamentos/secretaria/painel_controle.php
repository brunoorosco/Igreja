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
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./style_painel.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script src="./painel.js"></script>

     <title>Secretaria Geral</title>
 </head>

<body>
    <div class="container">
          <div class="card">
                <div class="card-header">
                <h4 class="card-title text-center"> Painel de Controle</h4>
            </div>
    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">

      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">Habilitar visualização de todos os membros</strong>
            <label class="switch">
              <input type="checkbox" checked id="visualizar_membros" name="item" onclick="verificaChecks()">
              <span class="slider round"></span>
            </label>
            </p>

        </div>
        <div class="media text-muted pt-3">
             <div class="card" id="filtro" style="width: 22rem;">
                     <div class="card-header"><h5 class="card-title">Filtro de membros Cadastrados</h5></div>
                        <div class="card-block">
                          <br>
                                <input type="range" class="custom-range" id="slider_filtro"  min="1" max="10" step="1">
                           
                              <div class="total">
                                  <div class="totalInner">
                                      <div class="price">
                                      <span style="color: #808080;">Maior que </span><span id="priceValue">1</span><span style="color: #808080;"> Membros</span>
                                      </div>
                                     
                                  </div>
                              </div>
                          </div>
                      </div>
           </div>
          
        <div class="media text-muted pt-3">
           <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            
        
          </p>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">All updates</a>
        </small>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
        <div class="media text-muted pt-3">

          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="media text-muted pt-3">

          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">All suggestions</a>
        </small>
      </div>
      <button type="submit" name="button" value="Valida Checks" onclick="verificaChecks()">Salvar</button>
    </main>

  </div>

  <script>
            window.onload = function() {
           atualiza("filtro_membros");
            
    }

    </script> 

</body>
</html>
