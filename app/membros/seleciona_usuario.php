<?php
 

    $i = 1;
//Paginação - Somar a quantidade de usuários
	$query = $pdo->query( "SELECT * FROM membros ORDER BY nome ASC LIMIT 15 ");
	$sql = "SELECT * FROM membros";
	$result = $pdo->query( $sql );
    $rows = $result->rowCount();
    
    $itens_pg = 15;
    
    //Quantidade de pagina
	$quantidade_pg = ceil(($rows / $itens_pg)); //função ceil arredonda valor para cima
	
	if(isset($_GET['page']) == $i)
    {
        $url = $_GET['page'];
        $mody = $url * $itens_pg - $itens_pg;
        $query = $pdo->query("SELECT * FROM membros ORDER BY nome ASC LIMIT 15 OFFSET $mody");
    }

?>