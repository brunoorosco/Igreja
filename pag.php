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
        

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
     <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <p class="text-white">
                        Nossas Igrejas
                    </p>
                </li>
                <li>
                    <a href="cadastro.php">Sede</a>
                </li>
                <li>
                    <a href="#">Sapopemba</a>
                </li>
                <li>
                    <a href="#">Guarulhos</a>
                </li>
                <li>
                    <a href="#">Itaqua</a>
                </li>
                <li>
                    <a href="#">Jd. Danfer</a>
                </li>
                <li>
                    <a href="#">Vila Curuça</a>
                </li>
                <li>
                    <a href="#">Suzano</a>
                </li> 
                <li>
                    <a href="#">Curitiba</a>
                </li>
                <li>
                    
                </li>
            </ul>
            

         </div>
        </div>
        <!-- /#sidebar-wrapper -->

           <div class="container h7" style="margin-left: 22%;">
           	<div class="row">
				                <?php
				              include ('intro.php');
				                    ?><br><br><br>
		                   <div class="list-group col-md-4 offset-md-4">
								  <a href="cadastro.php" class="list-group-item list-group-item-action">Cadastro de Membros</a>
								  <a href="#" class="list-group-item list-group-item-action">Ministério Kids</a>
								  <a href="#" class="list-group-item list-group-item-action">Ministério de Casais</a>
								  <a href="#" class="list-group-item list-group-item-action">Quatro Seres</a>
								  <a href="#" class="list-group-item list-group-item-action">Encontro/Reencontro</a>
								  <a href="#" class="list-group-item list-group-item-action">Ministério de Obreiros</a>
								  <a href="#" class="list-group-item list-group-item-action">Supervisores</a>
								  

							</div>    	
		</div></div>
       <!-- /#page-content-wrapper -->

    
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
   $(document).ready(function() {
    $(".dropdown").dropdown();
});
        $("#wrapper").toggleClass("toggled");
   

   $(document).ready(function(){
  $('.dropdown').on('show.bs.dropdown', function(){
    alert('The dropdown is about to be shown.');
  });
  $('.dropdown').on('shown.bs.dropdown', function(){
    alert('The dropdown is now fully shown.');
  });
  $('.dropdown').on('hide.bs.dropdown', function(e){
    alert('The dropdown is about to be hidden.');
  });
  $('.dropdown').on('hidden.bs.dropdown', function(){
    alert('The dropdown is now fully hidden.');
  });
});
    </script>

</body>

</html>