
<?php
 require_once '_fonts/config/banco.php';


    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $endereco = $_POST['endereco']; 
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nascimento'];
    $supervisao = $_POST['supervisao'];
    $nasc = date("Y-m-d",strtotime(str_replace('/','-',$nasc)));  
    



    $sql = "INSERT INTO membros (nome, telefone, email, nasc, cargo, endereco, cpf, supervisao) values (:nome, :telefone, :email, :nasc, :cargo, :endereco, :cpf , :supervisao)";


    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':nasc',$nasc);
        $stmt->bindParam(':cargo',$cargo); 
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':cpf',$cpf);
        $stmt->bindParam(':supervisao',$supervisao);
        $stmt->execute();
        $db = null;
    //  echo ' <script type="text/JavaScript">alert("Cadastro com sucesso !");   </script>';
    //   echo = "<meta http-equiv='Refresh' content='0;URL='cadastro.php'>";
   // echo "<script>alert('$nome, o cadastro foi realizado com sucesso! Obrigado!!!');";//window.location='menu.html';</script>";
      return;

    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


/*
$app->get('/cadastro/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM visitantes where idVis = '$id'";
    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $costumers = $stmt->fetchAll(PDO::FETCH_OBJ);
        $total=count($costumers);
        $db = null;
        if($total > 0){
            echo '<!doctype html>
            <html lang="pt-br">
                <head>
                    <meta charset="utf-8">
                    <meta name="description" content="Pagina de divulgação do projeto Senai Abit sobre a industria 4.0 na area de confecção">
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <title>Confecção 4.0</title>
                    <link href="../_fonts/css/estilo.css" rel="stylesheet"/>
                    <meta>
                </head>
                <body>
                    <section id="contorno">
                        <P>CONFECÇÃO 4.0</P>
                        <P>SENAI-SP</P>
                        <P>OP: '.$costumers[0]->ordem.'</P>
                        <P>ESCOLA SENAI - BRÁS</P>
                        <P>CNPJ: 03.774.819/0005-28</P>
                        <P>Produzido no Brasil</P>
                        <P>100% POLIAMIDA</P>
                        <div>
                            <img src="../_img/etiqueta/1.jpg" alt="">
                            <img src="../_img/etiqueta/2.jpg" alt="">
                            <img src="../_img/etiqueta/3.jpg" alt="">
                            <img src="../_img/etiqueta/4.jpg" alt="">
                            <img src="../_img/etiqueta/5.jpg" alt="">
                            <div><img src="../_img/etiqueta/6.jpg" alt=""></div>
                        </div>
                        <p>'.$costumers[0]->tamanho.'</p>

                    </section>
                </body>
            </html>';
        }else{
            echo "<div style='margin-top:100px;'><span style='font-size:3em;text-align: center;'>Nenhuma etiqueta encontrada </span> <span style='font-size:5em'> :(</span></div>";
        }
    }catch(PDOException $e){
        //echo '{"error": {"text": '.$e->getMessage().'}';
        echo "Algo deu errado";
    }
});
$app->get('/',function(Request $request, Response $response){
    include "cadastro.php";
   });

$app->get('/api/cadastro',function(Request $request, Response $response){
 $sql = "SELECT * FROM visitantes ";
    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $costumers = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $json = json_encode($costumers);
        echo $json;
    }catch(PDOException $e){
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }
});
$app->get('/api/cadastro/{ordem}',function(Request $request, Response $response){
    $id = $request->getAttribute('ordem');

    $sql = "SELECT * FROM visitantes where ordem = $id";
    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $costumers = $stmt->fetchAll(PDO::FETCH_OBJ);
        $total=count($costumers);
        $db = null;
        if($total > 0){
            echo $costumers[0]->nome;
        }else{
            echo "Nenhum registro ncontrado";
        }
    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
$app->post('/api/cadastro/add',function(Request $request, Response $response){
    $nome = $request->getParam('nome');
    $ordem = $request->getParam('ordem');
    $tamanho = $request->getParam('tamanho');
    if($tamanho==null){
        $tamanho='';
    }
    $min=date('i');
    $seg=date('s');
    $antes = substr($seg, -1);
    $depois = substr($seg, -2,1);
    $mantes = substr($min, -1);
    $mdepois = substr($min, -2,1);
    $stringId=$mantes.$antes.$ordem.$depois.$mdepois;

    $sql = "INSERT INTO visitantes (nome, ordem, tamanho,stringId) values (:nome, :ordem, :tamanho,:stringId)";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':ordem',$ordem);
        $stmt->bindParam(':tamanho',$tamanho);
        $stmt->bindParam(':stringId',$stringId);
        $stmt->execute();
        $db = null;
        echo '{"url":"http://confeccao40.com.br/etiqueta/'.$stringId.'"}';
    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


});
$app->put('/api/qrcode/update',function(Request $request, Response $response){
    $ordem = $request->getParam('ordem');
    $tamanho = $request->getParam('tamanho');
    $sql = "UPDATE visitantes SET
                tamanho = :tamanho
            WHERE ordem = $ordem ;";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':tamanho',$tamanho);
        $stmt->execute();
        $db = null;
        echo '{"aviso":{"texto":etiqueta atualizada"}';
    }catch(PDOException $e){
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


});
$app->delete('/api/qrcode/delete/{ordem}',function(Request $request, Response $response){
    $ordem = $request->getAttribute("ordem");
    $sql = "DELETE FROM visitantes where ordem = ".$ordem;
    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $db = null;
        echo '{"aviso":{"texto":etiqueta excluida"}';
    }catch(PDOException $e){
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }
});*/
?>
