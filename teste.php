<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
    <script type="text/javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" src="js/jquery-ui-1.9.1.custom.min.js"></script>  

    <style type="text/css"> #conteudo { width: 400px; height: 300px;} </style> 
</head>
<body>    
     <div id="sidebar">
        <ul>
            <li><a onclick="carregar('cadastro.php')" href="#">Home</a></li>
            <li><a onclick="carregar('menu.html')" href="#">Explore</a></li>
            <li><a onclick="carregar('users.html')" href="#">Users</a></li>
            <li><a onclick="carregar('signOut.html')" href="#">Sign Out</a></li>
        </ul>
    </div>
    <div id="conteudo"></div>
</body>

<script>
    function carregar(pagina){
        $("#conteudo").load(pagina);
    }
</script>
</html>