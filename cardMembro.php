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
       $sql = "SELECT * FROM membros where idmembros = ?";
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
        <title>Informações do Membro</title>
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
                                <?php echo $data['nome'];?>
                            </label>                        
                    </div>

                    <div class="control-group">
                     <label class="control-label carousel-inner">Aniversário: 
                                <?php echo date("d/m",strtotime(str_replace('/','-',$data['nasc'])));?>
                            </label>
                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Endereço: 
                                <?php echo $data['endereco'];?>
                            </label>
                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Telefone:  <?php echo $data['telefone'];?>
                            </label>
                        
                    </div>

                    <div class="control-group">
                        <label class="control-label carousel-inner">Email:  <?php echo $data['email'];?>
                            </label>
                        </div>
                    

                    <div class="control-group">
                        <label class="control-label carousel-inner">Posição Herarquica: 
                                <?php echo $data['cargo'];?>
                            </label>
                     </div>
                      <div class="control-group">
                        <label class="control-label carousel-inner">CEM:  
                                <?php echo $data['supervisao'];?>
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
