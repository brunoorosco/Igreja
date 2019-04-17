<?php
    include_once("../../../_fonts/config/funcoes.php");
    include_once('../../../_fonts/config/banco.php');

    $sql = "UPDATE config_sistem SET funcao = '$nome', tema = '$tema', data_ ='$data_'  WHERE id = '$id' ";
    try{
  			$db = new db();
  			$db = $db->connect();
  			$stmt = $db->prepare($sql);
  			$stmt->execute(array(
  				':id'   => $id,
  				':funcao' => $nome,
  				':status'       => $tema
          ));
  			$db = null;
      }

    ?>
