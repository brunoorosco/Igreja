 <?php

  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta

  function autenticar($login, $senha) {
        $pdo = Banco::conectar();
        $sql = "SELECT username, password, idmembro FROM acesso where username = '$login' AND password = '$senha'";
        //echo $sql;
        $exec =  $pdo->query($sql);
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);

        if ($total > 0){
            $codigoUsuario = $rows[0]['idmembro'];
            $_SESSION['usuario'] = $rows[0]['username'];
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
		header("Location: http://localhost/www/igreja/index.php");
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
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "SecretariaCAC";
    $to = $destino;
    $subject = "Senha de acesso a secretariacac";
    $message = "Usuário: ".$destino;
    $headers = "De:". $from;
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
