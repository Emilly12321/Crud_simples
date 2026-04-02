<?php 

define('HOST', 'localhost');
define('DBNAME', 'crud_simples');
define('USER', 'root');
define('PASSWORD', '');


class Conexao{

    protected $conexao;

    function __construct()
    {

        $this->conexaoBancoDados();

    }

    function conexaoBancoDados(){

        try
        {
            $this->conexao = new PDO('mysql:host='.HOST.'; dbname='.DBNAME , USER , PASSWORD);
            
        }
        
        catch(PDOException $e)
        {

            echo "ERROR".$e->getMessage();
            die();
        }

    }

}


?>