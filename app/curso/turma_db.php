<?php
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    

	
           $aluno = $_POST['nome'];
           $curso = $_POST['curso'];
           


           $sql = "INSERT INTO turma(alunos, curso) VALUES (:aluno, :curso)";


         //  $sql = "SELECT infocursos.idCursos, membros.idmembros	FROM turma INNER JOIN membros
         //  ON turma.alunos = membros.idmembros INNER JOIN infocursos
         //  ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos like $idCursos";



  	 	//$tema = $_POST['tema'];
  		//$inicio = date("Y-m-d",strtotime(str_replace('/','-',$_POST['inicio'])));
  	 	//$cursos = "INSERT INTO turma(nome, data_,resp ) VALUES (:nome,:data_,:resp)";

  		try{
					$db = new db();
					$db = $db->connect();
					$stmt = $db->prepare($sql);
					$stmt->execute(array(
						':aluno'  => $aluno,
						':curso'	 => $curso
						//':dataCad' => $inicio,
						//':respCad'  => $resp
					));
                    $db = null;
                    echo "$aluno Inserido com sucesso";
				//$_SESSION['msg_curso'] = "<div class='alert alert-success' role='alert'>Curso Cadastrado com Sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		   //header("Location: http://localhost/www/igreja/app/curso/cursos.php");
		    }
        catch(PDOException $e){

		          echo '{"erro": {"texto": '.$e->getMessage().'}';
		          }
?>
