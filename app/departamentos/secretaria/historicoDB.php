<?php
# Informa qual o conjunto de caracteres será usado.
//header('Content-Type: text/html; charset=utf-8');

if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';



if (isset($_POST["nome"]))       $nome = $_POST["nome"];
$status_ = ( isset($_POST['status_']) ) ? $_POST['status_'] : null;
try{
        
   //     $idCourse = idCurso($tema,data);   

       
        $_SESSION['usuario'] = $nome;
        $id_user = carrega_id_usuario();
        if($id_user =='0') {
                    $id_user = null;
                } else $nome = '0';
           
        $pdo = Banco::conectar();
        $sql_= "INSERT INTO historico(nome, status_, membroCad, curso) VALUES (:nome, :status_, :membroCad, :curso) ";

        $stmt = $pdo->prepare($sql_);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':status_',$status_);
        $stmt->bindParam(':membroCad',$id_user);
        $stmt->bindParam(':curso',$curso);
        $stmt->execute();
        $pdo = null;

        echo json_encode(array("mens"=>"ok"));

} catch(PDOException $e){
    //echo '{"erro": {"texto": '.$e->getMessage().'}';
    echo '{"erro":'.$e->getMessage().'}';
}

?>