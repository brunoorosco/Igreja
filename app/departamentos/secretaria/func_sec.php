<?php
 include_once("../../../_fonts/config/funcoes.php");
 include_once('../../../_fonts/config/banco.php');


function achar_evento($valor)
{
    $pdo = Banco::conectar();
    $sql = "SELECT titulo FROM eventos where titulo = '$valor' ";
    $exec =  $pdo->query($sql);
    $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
    $total = count($rows);
            if ($total > 0){
                    $codigo = $rows[0]['titulo'];
                    return $codigo;
            }
            else{
                $codigo = 0;
                return false;
            }
}

function achar_data($valor)
{
    $pdo = Banco::conectar();
    $sql = "SELECT inicioevento FROM eventos where titulo = '$valor' ";
    $exec =  $pdo->query($sql);
    $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
    $total = count($rows);
            if ($total > 0){
                    $codigo = $rows[0]['inicioevento'];
                    return $codigo;
            }
            else{
                $codigo = 0;
                return false;
            }
}

function certificadoBatismo($valor){
    $pdo = Banco::conectar();
    $sql = "SELECT * FROM batizando where batismo = '$valor' ";
    $exec =  $pdo->query($sql);
    $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
    $total = count($rows);
    if ($total > 0) {
        $codigo = $rows[0]['nome'];
        echo $codigo;
        return $codigo;
    } else {
        $codigo = 0;
        return false;
    }

}


?>



