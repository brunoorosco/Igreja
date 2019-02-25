 <?php

  session_start();
  
  function autenticar($login, $senha) {

        $pdo = Banco::conectar();
        $sql = "SELECT idLogin, username, password FROM acesso where username = '$login' AND password = '$senha'";

        //echo $sql;

        $exec =  $pdo->query($sql);
        $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
        $total = count($rows);

        if ($total > 0){

            $codigoUsuario = $rows[0]['idLogin'];

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
    header("location:app/login/login.php");
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

  $result_events = "SELECT id, title, color, start, end FROM events";

  $exec =  $pdo->query($sql);
  $rows = $exec->fetchAll(PDO::FETCH_ASSOC);
  $total = count($rows);
}
