<?php
        require_once '../../_fonts/config/banco.php';

        $nome = $_GET["nome"];
        $data_ = $_GET["dataEvento"];
        $data = date("Y-m-d",strtotime(str_replace('/','-',$data_)));

        echo $data;
        $sql = "INSERT INTO `eventos` (`evento`, `dataEvento`) VALUES ('$nome', '$data')";

        try{
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':evento',$nome);
            $stmt->bindParam(':dataEvento',$data);
            $stmt->execute();
            $db = null;

            // echo json_encode(array('mens1' => "Cadastrado realizado com sucesso!","mens2"=>"success","mens3"=>"1" ));
            echo "1";

        }catch(PDOException $e){
            //echo '{"erro": {"texto": '.$e->getMessage().'}';
            echo '{"erro": {"texto": '.$e->getMessage().'}';
        }
?>
