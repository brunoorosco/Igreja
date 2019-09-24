 <?php
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta

  function autenticar($login, $senha) {
        $pdo = Banco::conectar();
        $sql = "SELECT username, password, id, nivel_acesso FROM acessonew where username = '$login' AND password = '$senha'";
        //echo $sql;
        $exec =  $pdo->query($sql);
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);

        if ($total > 0){
            $codigoUsuario = $rows[0]['id'];
            $_SESSION['usuario'] = $rows[0]['username'];
            $_SESSION['nivel'] = $rows[0]['nivel_acesso'];
            $_SESSION['COD_USUARIO'] = $codigoUsuario;
            
            return $codigoUsuario;
        }
        else{
          $codigoUsuario = 0;
          return $codigoUsuario;
        }
  }

  function validarUsuario() {
    if (($_SESSION['COD_USUARIO'] != '')) {
       return $_SESSION['COD_USUARIO'];
    }
  else {
    //header("location:app/login/login.php");
    $_SESSION['msg_login'] = "<div id='message' class='alert alert-warning' role='alert'><strong>É necessário estar logado ao sistema!!!</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location:" .$URLBASE);
    }
  }

function geraSenha($tamanho = 6, $maiusculas = true, $numeros = true, $simbolos = false)
{
  $lmin = 'abcdefghijklmnopqrstuvwxyz';
  $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $num = '1234567890';
  $simb = '!@#$%*-';
  $retorno = '';
  $caracteres = '';
  $caracteres .= $lmin;

    if ($maiusculas) $caracteres .= $lmai;
    if ($numeros) $caracteres .= $num;
    if ($simbolos) $caracteres .= $simb;

    $len = strlen($caracteres);
      for ($n = 1; $n <= $tamanho; $n++) {
          $rand = mt_rand(1, $len);
          $retorno .= $caracteres[$rand-1];
        }
    return $retorno;
}


function enviarEmail($destino,$senha)
{
  // Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers = "MIME-Version: 1.1\n";
  // Para enviar o e-mail em formato texto com codificação de caracteres Europeu Ocidental (usado no Brasil)
  $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
  // Para enviar o e-mail em formato HTML com codificação de caracteres Europeu Ocidental (usado no Brasil)
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  // Para enviar o e-mail em formato HTML com codificação de caracteres Unicode (Usado em todos os países)
  $headers .= "Content-type: text/html; charset=utf-8\n";
  // E-mail que receberá a resposta quando se clicar no 'Responder' de seu leitor de e-mails
  $headers .= "From: Comunidade Avivamento em Cristo <secretaria@secretariacac.com>\n";
  // para enviar a mensagem em prioridade máxima
  $headers .= "X-Priority: 1\n";
  // para enviar a mensagem em prioridade mínima
  $headers .= "X-Priority: 5\n";
  // para enviar a mensagem em prioridade normal (valor padrão caso não seja especificada)
  $headers .= "X-Priority: 3\n";
      
      ini_set('display_errors', 1);
      error_reporting(E_ALL);
      $from = "secretaria@secretariacac.com";
      $to = $destino;
      $subject = "Senha de acesso a secretariacac";
      $message = "Usuário: ".$destino. "\nSenha de acesso: ".$senha;
     // $headers = "De:". $from;
     // $headers .= "From: Comunidade Avivamento em Cristo <secretaria@secretariacac.com>\n";
      mail($to, $subject, $message, $headers);
      echo "A mensagem de e-mail foi enviada.";
    
  }

function calendario()
{
/*
  $sql = "SELECT id, titulo, color, inicioevento, terminoevento FROM eventos";
  $pdo = Banco::conectar();
  $exec =  $pdo->query($sql);
  $rows = $exec->fetch(PDO::FETCH_ASSOC);
  $result_array[] = $rows;
  //  echo  json_encode($result_array);
  $exec->execute();
  $result = $exec->fetchAll();
  return;*/
}

function conv_dataHora($start){
$data = explode(" ", $start);
list($date, $hora) = $data;
$data_sem_barra = array_reverse(explode("/", $date));
$data_sem_barra = implode("-", $data_sem_barra);
$start_sem_barra = $data_sem_barra . " " . $hora;

 return $start_sem_barra;}

 function carrega_dados(){
   if(isset($_SESSION['usuario'])){
       $email = $_SESSION['usuario'] ;
       $sql = "SELECT supervisao FROM membros where email = '$email'";
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $exec =  $pdo->query($sql);
       $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
       $total = count($rows);
       Banco::desconectar();

   if($total > 0 ){

       return $rows[0]['supervisao'];

 }}}

 function carrega_id_usuario(){
  if(isset($_SESSION['usuario'])){
      $email = $_SESSION['usuario'] ;
      $sql = "SELECT idmembros FROM membros where email = '$email' OR nome = '$email'";
      $pdo = Banco::conectar();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $exec =  $pdo->query($sql);
      $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
      $total = count($rows);
      Banco::desconectar();

      if($total > 0 ){
          return $rows[0]['idmembros'];
        }else return '0';
}}

function carrega_conf($conf)
{
      $sql = "SELECT _status FROM config_sistem where funcao = '$conf'";
      $pdo = Banco::conectar();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $exec =  $pdo->query($sql);
      $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
      $total = count($rows);
      Banco::desconectar();
     if($total > 0 )  return $rows[0]['_status']; //[0] representa o numero da coloca que estou procurando no caso como só tem uma é 0

}
function encontro(){ //devolve o numero do encontro ou reencontro atual e se é encontro ou reeecontro
$data  =  "Nenhum Encontro ou Reencontro previsto para este mês";
$pdo = Banco::conectar();
$sql = 'SELECT * from info_encontro where data_inicial >= DATE_SUB(CURDATE(), INTERVAL 5 DAY) order by data_inicial asc limit 1';//DATE_ADD(CURDATE(), INTERVAL 120 DAY)
foreach($pdo->query($sql)as $row_events) { 
  $data  =  $row_events['tipo'].' Nº '.$row_events['n_encontro']; 
  
}
return $data;
}

function encontro_atual(){ //devolve o numero do encontro ou reencontro atual
  $data  =  "Nenhum Encontro ou Reencontro previsto para este mês";
  $pdo = Banco::conectar();
  $sql = 'SELECT * from info_encontro where data_inicial >= DATE_SUB(CURDATE(), INTERVAL 5 DAY) order by data_inicial asc limit 1';//DATE_ADD(CURDATE(), INTERVAL 120 DAY)
  foreach($pdo->query($sql)as $row_events) { 
     $data = $row_events['n_encontro']; 
    
  }
  return $data;
  }

function id_encontro_atual() //devolve o numero do encontro ou reencontro atual
     {
      $pdo = Banco::conectar();
      $sql = 'SELECT * from info_encontro where data_inicial >= DATE_SUB(CURDATE(), INTERVAL 5 DAY) order by data_inicial asc limit 1';//DATE_ADD(CURDATE(), INTERVAL 120 DAY)
      foreach($pdo->query($sql)as $row_events) { 
         $data = $row_events['id']; 
        
      }
     return $data;
  }

function ultimo_encontro()
    {
      $pdo = Banco::conectar();
      $sql = 'SELECT * from info_encontro where data_inicial <= CUrdate() order by data_inicial desc limit 1';
      foreach($pdo->query($sql)as $row_events) { 
          $data  =  $row_events['n_encontro']; 
         
        }
      return $data;
    }
function ultimo_encontro_texto()
    {
      $pdo = Banco::conectar();
      $sql = 'SELECT * from info_encontro where data_inicial <= CUrdate() order by data_inicial desc limit 1';
      foreach($pdo->query($sql)as $row_events) { 
        
          $data  =  $row_events['tipo'].' Nº '.$row_events['n_encontro']; 
        }
      return $data;
    }


function enc_reenc()
{
  $sql = 'SELECT * from info_encontro having data_inicial BETWEEN curdate() AND date_add(curdate(),INTERVAL 30 day)';
}

function idCurso()
{
      $sql = "SELECT idCursos FROM infocursos  order by idCursos DESC limit 1";
      $pdo = Banco::conectar();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $exec =  $pdo->query($sql);
      $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
      $total = count($rows);
      Banco::desconectar();
     if($total > 0 )  return $rows[0]['idCursos']; //[0] representa o numero da coloca que estou procurando no caso como só tem uma é 0

}

?>

