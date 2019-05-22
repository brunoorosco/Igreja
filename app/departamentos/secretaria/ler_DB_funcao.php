<?php
//setting header to json
//header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';
//require_once './config_DB.php';

         $func = $_GET['funcao'];

            $id=achar_id($func);      
           // echo $id;

            $pdo = Banco::conectar();
            $data = array();

            $sql= " SELECT _status as funcao FROM config_sistem where id='$id'";    
                     
            foreach($pdo->query($sql)as $row)
               {       
                  $data[] = $row;
               }
               $pdo=null;   
            //echo $row['funcao'];
            
            // print ($data[0]);
            print json_encode($data);
            
  
            function achar_id($valor)
            {
               $pdo = Banco::conectar();
               $sql = "SELECT id FROM config_sistem where funcao = '$valor' ";
               $exec =  $pdo->query($sql);
               $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
               $total = count($rows);
               $pdo =null;
                     if ($total > 0){
                           $codigo = $rows[0]['id'];
                           return $codigo;
                     }
                     else{
                        $codigo = 0;
                        return false;
                     }
            }
?>
