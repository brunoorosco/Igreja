<?php 
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="http://localhost/www/igreja/_fonts/css/bootstrap.min.css">   
<script src="http://localhost/www/igreja/_fonts/js/jquery-3.3.1.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/popper.min.js"></script>
<script src="http://localhost/www/igreja/_fonts/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .menu-area{background: #FF8000}
.dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
.mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link{color:#fff;font-size:15px;text-transform:capitalize;padding:15px 14px;font-family:'Roboto',sans-serif;display: block !important;}
.mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #fff;background: #4CAF50;outline: 0;}
/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a{background: #4CAF50;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #4CAF50;}
.mainmenu .collapse ul ul ul > li:hover > a{background: #4CAF50;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#1565C0;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#1E88E5}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#64B5F6}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 767px) {
.navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
.navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
}
</style>
</head>
<body>
<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class=""><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SEDE</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Encontrista</a></li>
                                <li><a href="#">Equipe</a></li>
                                <li><a href="#">Membros</a></li>
                                </ul>
                            </li>
                             <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consulta</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Encontrista</a></li>
                                        <li><a href="#">Equipe</a></li>
                                        <li><a href="#">Membros</a></li>
                                        <li><a href="#">Encontro</a></li>
                                    </ul>
                                </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ministérios</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Ministérios KIDS</a></li>
                                <li><a href="#">Obreiros</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quatro Seres</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Instrumental</a></li>
                                        <li><a href="#">Vocal</a></li>
                                        <li><a href="#">Dança</a></li>
                                        <li><a href="#">Teatro</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="#">IGREJAS</a></li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </div>
</div>


</body>
</html>