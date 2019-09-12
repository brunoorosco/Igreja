<?php

class Banco
{   

    private static $dbname = 'db_Igreja';
    private static $dbhost = 'localhost';
    private static $dbuser = 'root';
    private static $dbpass = '123456';
 ////// banco host      ////// 
    /*private static $dbname = 'id8520277_secretariacac';
    private static $dbhost = 'localhost';
    private static $dbuser = 'id8520277_secretariacac';
    private static $dbpass = 'orosco0329';
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
                self::$cont =  new PDO( "mysql:host=".self::$dbhost.";"."dbname=".self::$dbname, self::$dbuser, self::$dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
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
        private $dbpass = "123456";
        private $dbname = 'DB_Igreja';
///////// hospedagem////////////////////////
     /*   private $dbhost = 'localhost';
        private $dbuser = 'id8520277_secretariacac';
        private $dbpass = "orosco0329";
        private $dbname = 'id8520277_secretariacac';*/

        public function connect (){
            $mysqli_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysqli_connect_str, $this->dbuser,$this->dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            $dbConnection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }

    }
?>
