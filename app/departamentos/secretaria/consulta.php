<?php

include_once("../../../_fonts/config/funcoes.php");
include_once( '../../../_fonts/config/banco.php');
//validarUsuario();


//if (isset($_POST["user"]) && !empty($_POST["user"]))      {

   $nome = $_POST["user"];
   //consultar no banco de dados
$sql = "SELECT infocursos.tema as curso, status_, infocursos.data_, historico.nome, membros.nasc, infocursos.idCursos as ID FROM historico 
INNER JOIN infocursos  ON infocursos.idCursos = historico.curso
INNER JOIN  membros ON membros.nome = historico.nome
where historico.nome like '%".$nome."%' 
GROUP BY infocursos.tema";
//$resultado_usuario = mysqli_query($conn, $result_usuario);

$pdo = Banco::conectar();
//foreach($pdo->query($sql)as $resultado_usuario)
$resultado_usuario = $pdo->query($sql);
$rows = $resultado_usuario->fetchAll(PDO::FETCH_COLUMN);

//Verificar se encontrou resultado na tabela "usuarios"
if(($rows != 0)){

	?>
    <div class="table-responsive">
                 <table class="table table-striped table-sm" id="tabela_disciplina">
                        <thead>
                          <tr>
                            <th>Data</th>
                            <th>Código</th>
                            <th>Disciplina</th>
                            <th>Situação</th>
                          </tr>
                        </thead>
                        <tbody>
                      
                        <?php

                          $i = 0;
						  foreach($pdo->query($sql)as $row)
                          {
                              echo '<tr>';
                              echo '<td class="editable">'.date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))).'</td>';
                              echo '<td class="text-left" >'. $row['ID'] . '</td>';
                              echo '<td>'. $row['curso'] . '</td>';
                                                 
                          if($row['status_'] == "APROVADO")
                              echo '<td class="text-success"> <i class="fa fa-thumbs-up " aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                              
                              else echo '<td class="text-danger"> <i class="fa fa-thumbs-down red" aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                              ?>
                          
                          <?php }
                                              
                                  ?>
                                 
                              </tr>

                        </tbody>
                       
                      </table>
                      </div>
                          <nav>
                              <button id="offer-edit-button" class="mybutton btn btn-primary right">Edit mode</button>
                              <ul class="pagination"></ul>
                          </nav>
                          <div class="border-top border-bottom border-danger">
                          <tr>
                            <td colspan="12">
                              <i class="fa fa-info-circle"></i>
                              <small>
                                Informações para simples conferência.
                                Os cursos são atualizados somente após o término dos processos de verificação.
                              </small>
                            </td>
                          </tr>
                        </div>

	<?php
	
	
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
?>