<?php

class Banco
{   

    private static $dbNome = 'DB_Igreja';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
 ////// banco host      ////// 
    /*private static $dbNome = 'id8520277_secretariacac';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'id6581120_brunoorosco';
    private static $dbSenha = 'orosco0329';
    */
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

class db{
        private $dbhost = '127.0.0.1';
        private $dbuser = 'root';
        private $dbpass = "";
        private $dbname = 'DB_Igreja';

        public function connect (){
            $mysqli_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysqli_connect_str, $this->dbuser,$this->dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            $dbConnection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }

    }
?>
