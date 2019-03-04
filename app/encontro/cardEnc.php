<?php
    require '_fonts/config/banco.php';
    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }

    if(null==$id)
    {
        header("Location: index.php");
    }
    else
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM encontrista where idEncontrista = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="_fonts/css/bootstrap.min.css">
        <title>Informações do Encontrista</title>
    </head>

    <body>
        <div class="container">
            <div class="span10 offset1">
                  <div class="card">
    								<div class="card-header">
                    <h3 class="well">Informações do Membro</h3>
                </div>
                <div class="container">
                <div class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label carousel-inner">Nome:
                                <?php echo $data['nomeEnc'];?>
                            </label>
                    </div>

                    <div class="control-group">
                     <label class="control-label carousel-inner">Aniversário:
                                <?php echo date("d/m",strtotime(str_replace('/','-',$data['nascEnc'])));?>
                            </label>
                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Endereço:
                                <?php echo $data['endEnc'];?>
                            </label>
                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Telefone:  <?php echo $data['telEnc'];?>
                            </label>

                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Email:  <?php echo $data['emailEnc'];?>
                            </label>
                        </div>


                    <div class="control-group">
                        <label class="control-label carousel-inner">CEM:
                                <?php echo $data['responsavel'];?>
                            </label>

                    </div>
                    <br/>
                    <div class="form-actions">
                        <a href="menu.html" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
        <script src="_fonts/js/jquery-3.3.1.js" ></script>
        <script src="_fonts/js/bootstrap.min.js"></script>
    </body>

    </html>
