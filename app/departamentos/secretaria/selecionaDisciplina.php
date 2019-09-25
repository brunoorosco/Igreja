<?php
 ////////  ESTE SCRIPT TEM COMO FUNÇÃO AJUSTAR A QUANTIDADE DE ITENS QUE MOSTRARÁ NA TABELA CRIANDO PAGINAÇÃO ///////////

    $i = 1;
//Paginação - Somar a quantidade de usuários
	//$query = $pdo->query( "SELECT * FROM membros ORDER BY nome ASC LIMIT 15 ");
	$query = $pdo->query( "SELECT infocursos.tema as curso, status_, infocursos.data_, historico.nome, membros.nasc, infocursos.idCursos as ID FROM historico 
    INNER JOIN infocursos  ON infocursos.idCursos = historico.curso
    INNER JOIN  membros ON membros.nome = historico.nome
    
    GROUP BY infocursos.tema");

	$sql = "SELECT infocursos.tema as curso, status_, infocursos.data_, historico.nome, membros.nasc, infocursos.idCursos as ID FROM historico 
    INNER JOIN infocursos  ON infocursos.idCursos = historico.curso
    INNER JOIN  membros ON membros.nome = historico.nome
  
    GROUP BY infocursos.tema";
	$result = $pdo->query( $sql );
    $rows = $result->rowCount();
    
    $itens_pg = 10; ////QUANTIDADE DE ITENS NA TELA
    
    //Quantidade de pagina
	$quantidade_pg = ceil(($rows / $itens_pg)); //função ceil arredonda valor para cima
	
	if(isset($_GET['page']) == $i)
    {
        $url = $_GET['page'];
        $mody = $url * $itens_pg - $itens_pg;
        //$query = $pdo->query("SELECT * FROM membros ORDER BY nome ASC LIMIT 15 OFFSET $mody");
        $query = $pdo->query("SELECT infocursos.tema as curso, status_, infocursos.data_, historico.nome, membros.nasc, infocursos.idCursos as ID FROM historico 
        INNER JOIN infocursos  ON infocursos.idCursos = historico.curso
        INNER JOIN  membros ON membros.nome = historico.nome
      
        GROUP BY infocursos.tema");
    }

?>