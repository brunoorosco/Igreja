<?php
//setting header to json

if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';

function fun($funcao){

    $pdo = Banco::conectar();
    $data = array();
    $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceitoujesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
    
    foreach($pdo->query($sql_)as $row)
        {       
           $data[] = $row;
        }
  
       print $row['funcao'];
       
    // print ($data[0]);
     //print json_encode($data);
     
     }

function quant($funcao){

    $pdo = Banco::conectar();
    $data = array();
    $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceitoujesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
    
    foreach($pdo->query($sql_)as $row)
        {       
           $data[] = $row;
        }
  
       print $row['quant'];
       
    // print ($data[0]);
     //print json_encode($data);
     
     }

function label($tabela){

    $pdo = Banco::conectar();
    $data = array();
    $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceitoujesus where aceit_reconc='$tabela' GROUP BY aceit_reconc";
    
    foreach($pdo->query($sql_)as $row)
        {       
           $data[] = $row;
        }
  
       print $row['quant'];
       
    // print ($data[0]);
     //print json_encode($data);
     
     }


     ?>