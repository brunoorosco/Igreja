<?php
	include_once("../../_fonts/config/banco.php");
	$id = $_POST['idCursos'];
	$nome = $_POST['nome'];
	$tema = $_POST['tema'];
	echo "$id - $nome - $tema";

	$result_cursos = "UPDATE infocursos SET nomeCursos='$nome', tema =  '$tema' WHERE idCursos = '$id'";

try{
			$db = new db();
			//$db = $db->connect();
			$stmt = $db->prepare($result_cursos);
			$stmt->execute(array(
				':idCursos'   => $id,
				':nomeCursos' => $nome,
				':tema'       => $tema
			));
			$db = null;
			echo $stmt->rowCount();
			echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));

		}catch(PDOException $e){

		 echo '{"erro": {"texto": '.$e->getMessage().'}';
		}

?>
