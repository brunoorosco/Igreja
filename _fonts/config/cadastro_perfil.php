<?php

require_once 'banco.php';
require_once 'funcoes.php';

if(!isset($_SESSION))session_start(); //verifica se a sessão aberta


$funcao = $_GET['funcao'];


switch ($funcao){
      case 'cadastro': 
          cadastro();
          break;

       
       default:
       return false;
       break;

}
///////  VERIFICA SE USUARIO EMAIL JÁ ESTA CADASTRADO //////////       
 function cadastro(){ 
    $pdo = Banco::conectar();
     $data = array();
     $email = $_SESSION['usuario'] ;
     $sql_= "SELECT * FROM membros where email = '$email'";
     
     foreach($pdo->query($sql_)as $row)
         {       
            $data[] = $row;
         }
         $pdo = Banco::desconectar();
         print json_encode($data);
        }

?>