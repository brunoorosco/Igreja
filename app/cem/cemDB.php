<?php

   if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
   require_once '../../_fonts/config/banco.php';
   require_once '../../_fonts/config/funcoes.php';
      
$funcao = $_GET['funcao'];
$arg_1 = $_GET['arg1'];
$arg_2 = $_GET['arg2'];


switch ($funcao)
{
      case 1: 
        //  curso();
          break;

       case 2:
         // aceitou($func);
       break;

       case 3:
           // fun($func);
       break;

       case 4:
          //  quant($func);
      break;

       case 5:
        //    labels();
      break;

       case 6:
         //   lab($func, $mes);
      break;

       case 7:
         //   total($mes);
         break;
       case 8:
          //  batizado($mes);
         break;

      case 10:
         membros();
      break;
      case 11:
         encontrista();
      break;



       default:
       return false;
       break;

}


function encontrista(){

    $pdo = Banco::conectar();
    $data = array();

    $last_encontro=ultimo_encontro();

    //echo $last_encontro;

    $sql_ = "SELECT DISTINCT encontrista.CEM as supervisao, COUNT(encontrista.idEncontrista) as quant_encontrista FROM encontro 
    INNER JOIN encontrista  ON encontro.encontrista = encontrista.idEncontrista     
    WHERE encontro.n_encontro = '$last_encontro' group BY encontrista.CEM ";
    
    foreach($pdo->query($sql_)as $row)
       {       
          $data[] = $row;
       }
       $pdo=null;   
    //echo $row['funcao'];
    
    // print ($data[0]);
    print json_encode($data);
    
    }

    function membros(){

        $pdo = Banco::conectar();
        $data = array();

       // $sql= " SELECT _status FROM config_sistem where funcao='filtro_membros'";
    //    $filtro = $pdo->query($sql)->fetch();
       // $cem = $_SESSION['cem'];
       // echo $_SESSION['cem'];
                  
        
        //$sql_= "SELECT  DISTINCT supervisao , COUNT(idmembros) as quant_membros  FROM membros GROUP BY supervisao";
        $sql_= "SELECT nome  FROM membros where supervisao = 'Lika' order by nome asc";
        
        foreach($pdo->query($sql_)as $row)
           {       
              $data[] = $row;
           }
           $pdo=null;   
        //echo $row['funcao'];
        
        // print ($data[0]);
        print json_encode($data);
        
        }

        ?>