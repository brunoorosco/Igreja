<?php
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
	include_once("../../_fonts/config/funcoes.php");
	
	$formulario = $_POST['formulario'];

if($formulario == "inserir")
  {		inserir();
  }else{
	   edicao();
  }

function edicao(){
	$id = $_POST['idCursos'];
	$nome = $_POST['nome'];
	$tema = $_POST['tema'];
	$data_ = date("Y-m-d",strtotime(str_replace('/','-',$_POST['dataCurso_'])));
	
	$result_cursos = "UPDATE infocursos SET nomeCursos='$nome', tema = '$tema', data_ ='$data_'  WHERE idCursos = '$id' ";
  try{
			$db = new db();
			$db = $db->connect();
			$stmt = $db->prepare($result_cursos);
			$stmt->execute(array(
				':idCursos'   => $id,
				':nomeCursos' => $nome,
				':tema'       => $tema,
				':data_'  		=> $data_
			));
			$db = null;
	     //	echo $stmt->rowCount();
		   //	echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
		$_SESSION['msg_curso'] = "<div class='alert alert-success' id='msg_curso' role='alert'>Curso alterado com sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	//	header("Location: http://localhost/www/igreja/app/curso/cursos.php");
		header('Location: ' . $_SESSION['URL']);
		exit;

		}catch(PDOException $e){

		 echo '{"erro": {"texto": '.$e->getMessage().'}';
	 }}

	 function inserir(){

  	 	$nome = $_POST['nome'];
  	 	$tema = $_POST['tema'];
  		$inicio = date("Y-m-d",strtotime(str_replace('/','-',$_POST['inicio'])));
  	 	$cursos = "INSERT INTO infocursos(nomeCursos, tema, data_ ) VALUES (:nome,:tema,:data_)";

  		try{
					$db = new db();
					$db = $db->connect();
					$stmt = $db->prepare($cursos);
					$stmt->execute(array(
						':nome'  => $nome,
						':tema'	 => $tema,
						':data_' => $inicio						
					));
					$db = null;
				$_SESSION['msg_curso'] = "<div class='alert alert-success' id='msg_curso' role='alert'>Curso Cadastrado com Sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		   //	header("Location: http://localhost/www/igreja/app/curso/cursos.php");
		   	header('Location: ' . $_SESSION['URL']);
			exit;
		    }
        catch(PDOException $e){

		          echo '{"erro": {"texto": '.$e->getMessage().'}';
		          }}
?>
