<?php

require_once  __DIR__  . '/../config/DataBase.php';

class userModel extends Conexao {

    private $tabela;


    function __construct()
    {
        parent::__construct();
        $this->tabela = 'usuarios';
    }

    public function insert($nome,$email,$telefone,$idade,$cidade,$curso){
            

            // mesma coisa se fosse -> $bancoSelecionado = $this->conexao->prepare("INSERT INTO $this->tabela (modelo, marca, ano) VALUES (?, ?, ?)")
            $inserindo = $this->conexao->prepare("INSERT INTO $this->tabela (nome, email, telefone, idade, cidade, curso) VALUES (?, ?, ?,?,?,?)");
            $inserindo->execute([$nome, $email, $telefone, $idade, $cidade, $curso]);;
    
    }

    public function getAll()
    {

        $bancoSelecionando = $this->conexao->query("SELECT * FROM $this->tabela");

        $resultadoQuery = $bancoSelecionando->fetchAll(PDO::FETCH_ASSOC);;

        return $resultadoQuery;
    }

}



?>