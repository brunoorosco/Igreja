<?php

  include_once("../../_fonts/config/banco.php");
	include_once("../../_fonts/config/funcoes.php");
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta



	$id = $_POST['idmembro'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$data_ = date("Y-m-d",strtotime(str_replace('/','-',$_POST['niver'])));
  $telefone = $_POST['telefone'];

  //echo $id.$nome.$endereco.$data_.$telefone;

	$result_cursos = "UPDATE membros SET nome='$nome', endereco = '$endereco', nasc ='$data_', telefone ='$telefone'  WHERE idmembros = '$id' ";
  try{
			$db = new db();
			$db = $db->connect();
			$stmt = $db->prepare($result_cursos);
			$stmt->execute(array(
			//	':idmembros'    => $id,
				':nome'         => $nome,
				':endereco'     => $endereco,
				':nasc'  	      => $data_,
        ':telefone'     => $telefone
			));
			$db = null;
	     //	echo $stmt->rowCount();
		   //	echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
		$_SESSION['msg_cad'] = "<div id='message' class='alert alert-success' role='alert'>Cadastro alterado com sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location:".$URLBASE."/app/membros/membros.php");

		}catch(PDOException $e){

		 echo '{"erro": {"texto": '.$e->getMessage().'}';
	 }

	 ?>
