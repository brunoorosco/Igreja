<?php
      if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
        require_once '../../_fonts/config/banco.php';
        require_once '../../_fonts/config/funcoes.php';

        $titulo = $_POST["nome"];
        $inicio = implode(' ',array($_POST["datainicio"],$_POST["hora_inicio"]));
        $termino = implode(' ',array($_POST["datatermino"],$_POST["hora_termino"]));

        $inicioevento = conv_dataHora($inicio);
        $terminoevento = conv_dataHora($termino);
      //  $datainicio = date("Y-m-d",strtotime(str_replace('/','-',$datainicio)));
      //  $datatermino = date("Y-m-d",strtotime(str_replace('/','-',$datatermino)));


        $color = $_POST["color"];

      //  $sql = "INSERT INTO eventos ('titulo', 'inicioevento','color') VALUES ($titulo, $datainicio,$cor)";
      //  $sql = "INSERT INTO eventos ('titulo', 'inicioevento','color') VALUES ($titulo, $datainicio,$cor)";
            $sql = "INSERT INTO eventos (titulo, inicioevento, terminoevento, color) values (:titulo, :inicioevento,:terminoevento, :cor)";
        try{
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':titulo',$titulo);
            $stmt->bindParam(':inicioevento',$inicioevento);
            $stmt->bindParam(':terminoevento',$terminoevento);
            $stmt->bindParam(':cor',$color);  //carrega valor de $color para a variavel do banco :cor desta forma será carregado no banco na ordem escolhida
            $stmt->execute();
            $db = null;

             //echo json_encode(array('mens1' => "Evento cadastrado com sucesso!","mens2"=>"success","mens3"=>"1" ));
            //  echo "1";
            $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento Cadastrado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
            header("Location: http://localhost/www/igreja/index.php");

        }catch(PDOException $e){
            //echo '{"erro": {"texto": '.$e->getMessage().'}';
            echo '{"erro": '.$e->getMessage().'}';
        }
?>
