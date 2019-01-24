<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Membros</title>
</head>

<body>
        <div class="container-fluid">
           
           <!--     <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->
                <table class="table table-striped-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col-sm-2">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aniversário</th>
                            <th scope="col">Função</th>
                            <th scope="col">Supervisão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM membros ORDER BY idmembros DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['idmembros'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['nasc'] . '</td>';
                            echo '<td>'. $row['cargo'] . '</td>';
                            echo '<td>'. $row['supervisao'] . '</td>';
                            echo '<td width=50>';
                            echo '<div class="btn-group" role="group" >';
                            /*
                            echo '<a class="btn btn-primary btn-sm" href="cardMembro.php?id='.$row['idmembros'].'">Info</a>';
                            echo '';

                            echo '<a class="btn btn-warning btn-sm" href="update.php?id='.$row['idmembros'].'">Editar</a>';
                            echo '';
                            echo '<a class="btn btn-danger btn-sm" href="delete.php?id='.$row['idmembros'].'">Excluir</a>';*/
                            echo '</div></td>';
                            echo '</tr>';
                            echo '<div class="row"></div>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
           
        </div>
    <script src="js/jquery.js" ></script>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
