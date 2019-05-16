<?php

require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';


    $nome = $_GET['name'];
    

   ///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO //////////       
    $pdo = Banco::conectar();
    $data = array();
    $sql_= "SELECT * FROM encontrista where nomeEnc = '$nome'";
    
    foreach($pdo->query($sql_)as $row)
        {       
           $data[] = $row;
        }
        $pdo = Banco::desconectar();
        print json_encode($data);
       
?>
