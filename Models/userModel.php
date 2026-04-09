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
            

            $inserindo = $this->conexao->prepare("INSERT INTO $this->tabela (nome, email, telefone, idade, cidade, curso) VALUES (?, ?, ?,?,?,?)");
            $inserindo->execute([$nome, $email, $telefone, $idade, $cidade, $curso]);
    
    }

    public function getAll()
    {

        $bancoSelecionando = $this->conexao->query("SELECT * FROM $this->tabela");

        $resultadoQuery = $bancoSelecionando->fetchAll(PDO::FETCH_ASSOC);;

        return $resultadoQuery;
    }

    public function getByID($id)
    {

        $bancoSelecionando = $this->conexao->prepare("SELECT * FROM $this->tabela WHERE id = ?");

        $bancoSelecionando->execute([$id]);

        return $resultadoQuery = $bancoSelecionando->fetchAll(PDO::FETCH_ASSOC);;

    }

    public function updateUser($id,$nome,$email,$telefone,$idade,$cidade,$curso)
    {

        $bancoSelecionando = $this->conexao->prepare("UPDATE $this->tabela SET  nome = ?, email = ?, telefone = ?, idade = ?, cidade = ?, curso = ? WHERE id = ?");

        $bancoSelecionando->execute([$nome,$email,$telefone,$idade,$cidade,$curso,$id]);

    }

    
    public function delete($id)
    {

        $bancoSelecionando = $this->conexao->prepare("Delete  FROM $this->tabela WHERE id = ?");

        $bancoSelecionando->execute([$id]);

    }



}



?>