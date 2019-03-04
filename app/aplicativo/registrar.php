<?php
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


    //$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $nome = filter_input(INPUT_POST , 'nome');
    $senha = filter_input(INPUT_POST , 'senha');
    $senha = sha1($senha);
    

    //$sql_ = "INSERT INTO teste (nome) values (:nome)";
    $sql_ = "SELECT * FROM acesso where username = '$nome' AND password = $senha";
    try{

        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $exec =  $pdo->query($sql_); 
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);
        Banco::desconectar();
        if ($total > 0 )
        {
            echo "1";
        }else {
            echo "0";
        }

    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


	?>
