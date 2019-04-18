<?php
    include_once("../../../_fonts/config/funcoes.php");
		include_once('../../../_fonts/config/banco.php');
		
		$funcao = $_GET['funcao'];
		$status = $_GET['status'];

		$id_funcao = achar_id($funcao);
	 
		
		try{

			  $sql = "UPDATE config_sistem SET  _status = :_status  WHERE id = :id ";

  			$db = new db();
  			$db = $db->connect();
  			$stmt = $db->prepare($sql);
  			$stmt->execute(array(
  				':id'   => $id_funcao,
  				//':funcao' => $funcao,
  				':_status'  => $status
          ));
				$db = null;
				echo "funcionou";

			} catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }
			


		function achar_id($valor)
			{
				$pdo = Banco::conectar();
				$sql = "SELECT id FROM config_sistem where funcao = '$valor' ";
				$exec =  $pdo->query($sql);
				$rows = $exec->fetchAll(PDO::FETCH_ASSOC);
				$total = count($rows);
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
