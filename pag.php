<?php
  include_once "teste.php"

 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Secretária Virtual da Comunidade Avivamento em Cristo">
    <meta name="author" content="Comunidade Avivamento em Cristo">

    <title>Portal Comunidade</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


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
<!-- Bootstrap core CSS -->
    </head>


<body>
  <script src="_fonts/js/jquery-3.3.1.js"></script>
  <script src="_fonts/js/popper.min.js"></script>
  <script src="_fonts/js/bootstrap.min.js"></script>
  <script src="_fonts/js/main.js"></script>
 <script type="text/javascript">
  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });
  return false;
});</script>

</body>

</html>
