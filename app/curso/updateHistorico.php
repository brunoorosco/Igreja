<?php
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    
           $aluno = $_POST['status_'];
           $curso = $_POST['curso'];
           
           //$sql = "DELETE INTO turma(alunos, curso) VALUES (:aluno, :curso)";
            $sql = " UPDATE historico SET status_ = :status_ WHERE idHist = :curso";
  		try{
					$db = new db();
          $db = $db->connect();
          $stmt = $db->prepare($sql);
          $stmt->bindParam(':status_', $aluno); 
          $stmt->bindParam(':curso', $curso); 
    			$stmt->execute();
                  
          if ($stmt->rowCount() > 0)echo "$aluno Aualizado!!!";
           else echo $aluno;//echo "Nenhum Aluno removido!!!";
          $db = null;
          
				//$_SESSION['msg_curso'] = "<div class='alert alert-success' role='alert'>Curso Cadastrado com Sucesso!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		   //header("Location: http://localhost/www/igreja/app/curso/cursos.php");
		    }
        catch(PDOException $e){

		          echo '{"erro": {"texto": '.$e->getMessage().'}';
		          }
?>
