<?php

include_once("../../_fonts/config/funcoes.php");
include_once( '../../_fonts/config/banco.php');
//validarUsuario();

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

//calcular o inicio visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

//consultar no banco de dados
$sql = "SELECT * FROM membros ORDER BY nome ASC LIMIT $inicio, $qnt_result_pg";
//$resultado_usuario = mysqli_query($conn, $result_usuario);

$pdo = Banco::conectar();
//foreach($pdo->query($sql)as $resultado_usuario)
$resultado_usuario = $pdo->query($sql);
//este e usado para executar a pesquisa a cima, no caso de voces estranhar esse codigo e por que esta em PDO rs, tem mais e pra voce escrever execute e nao executar.
$resultado_usuario->execute();
//Aqui voce é a mesma coisa que o num_rows vai voltar se tudo ok 1
$trg = $resultado_usuario->rowCount();  
//Verificar se encontrou resultado na tabela "usuarios"
if(($trg != 0)){

	?>
<div class="container-fluid">
      <div class="panel panel-primary">
            <div class="col-lg-12 table-responsive"> <!--     <p>
                <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->
                <table class="table table-striped table-sm text-leftr" id="tabela_membros">
		<thead>
		<tr>
							<th scope="col-lg-6">Nome</th>
							<th scope="col">Endereço</th>
							<th scope="col">Telefone</th>
							<!--<th scope="col">Email</th-->
							<th scope="col">Aniversário</th>
							<th scope="col">Função</th>
							<th scope="col">CEM</th>
							<th scope="col">Ação</th>
        </tr>
		</thead>
		<tbody>
				<?php
			foreach($pdo->query($sql)as $row_usuario){
			//while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>

				<tr>
					<td><?php echo $row_usuario['nome']; ?></td>
					<td><?php echo $row_usuario['endereco']; ?></td>
					<td><?php echo $row_usuario['telefone']; ?></td>
					<td><?php echo date("d/m",strtotime(str_replace('/','-',$row_usuario['nasc']))); ?></td>
					<td><?php echo $row_usuario['cargo']; ?></td>
					<td><?php echo $row_usuario['supervisao']; ?></td>

					<td>
                           <div class="btn-group btn-sm">
                           <button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idmembros']; ?>"></button>
                            <button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idmembros']; ?>" data-whatevernome="<?php echo $row['nome']; ?>"data-whateverdetalhes="<?php echo $row['ende']; ?>"></button>
                            <button type="button" class="btn btn-danger fas fa-trash disabled"></button></div></td>
				</tr>
				<?php	} ?>
		</tbody>
	</table>
	</div>
	</div>

	<?php
	
	//Paginação - Somar a quantidade de usuários
	$sql = "SELECT COUNT(idmembros) AS num_result FROM membros";
	$resultado_pg = $pdo->query($sql);
	//$row_pg = mysqli_fetch_assoc($resultado_pg);
	$row_pg = $resultado_pg->fetchAll(PDO::FETCH_ASSOC);
	
	//print_r ($results);
	//Quantidade de pagina
	$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg); //função ceil arredonda valor para cima
	
	//Limitar os link antes depois
	$max_links = 2;

	echo '<nav aria-label="paginacao">';
	echo '<ul class="pagination">';
	echo '<li class="page-item">';
	echo "<span class='page-link'><a href='#' onclick='listar_usuario(1, $qnt_result_pg)'>Primeira</a> </span>";
	echo '</li>';
	for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
		if($pag_ant >= 1){
			echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_ant, $qnt_result_pg)'>$pag_ant </a></li>";
		}
	}
	echo '<li class="page-item active">';
	echo '<span class="page-link">';
	echo "$pagina";
	echo '</span>';
	echo '</li>';

	for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
		if($pag_dep <= $quantidade_pg){
			echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_dep, $qnt_result_pg)'>$pag_dep</a></li>";
		}
	}
	echo '<li class="page-item">';
	echo "<span class='page-link'><a href='#' onclick='listar_usuario($quantidade_pg, $qnt_result_pg)'>Última</a></span>";
	echo '</li>';
	echo '</ul>';
	echo '</nav>';

}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
?>