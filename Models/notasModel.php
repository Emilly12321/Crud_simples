<?php

require_once __DIR__ . '/../config/DataBase.php';

class notasModel extends Conexao {

    private $tabela;

    function __construct()
    {
        parent::__construct();
        $this->tabela = 'notas_alunos';
    }

    public function insert($aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas)
    {
        $bancoSelecionando = $this->conexao->prepare("INSERT INTO $this->tabela 
        (aluno_id, bimestre, nota1, nota2, nota3, peso, faltas)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $bancoSelecionando->execute([$aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas]);
    }

   public function getAll()
    {
        $bancoSelecionando = "SELECT notas.*,user.nome,
                    (notas.nota1 + notas.nota2 + notas.nota3) AS soma_notas,
                    (notas.nota1 + n.nota2 + notas.nota3)/3 AS media_simples,
                    ((notas.nota1 + notas.nota2 + notas.nota3)/3) * notas.peso AS media_ponderada,

                    CASE 
                        WHEN (notas.nota1 + notas.nota2 + notas.nota3)/3 >= 7 THEN 0
                        ELSE 7 - ((notas.nota1 + notas.nota2 + notas.nota3)/3)
                    END AS diferenca_meta

                FROM $this->tabela notas
                INNER JOIN usuarios user ON user.id = notas.aluno_id";

        return $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAlunos()
    {
        $sql = "SELECT id, nome FROM usuarios";
        return $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getResumo()
    {
        $sql = "SELECT COUNT(*) AS total_lancamentos,
                MAX((nota1 + nota2 + nota3)/3) AS maior_media,
                MIN((nota1 + nota2 + nota3)/3) AS menor_media,
                AVG((nota1 + nota2 + nota3)/3) AS media_geral
                FROM $this->tabela";

        return $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function getByID($id)
    {
        $sql = $this->conexao->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $sql->execute([$id]);

        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas)
    {
        $sql = $this->conexao->prepare("UPDATE $this->tabela 
                SET aluno_id=?, bimestre=?, nota1=?, nota2=?, nota3=?, peso=?, faltas=?
                WHERE id=?");

        $sql->execute([$aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas, $id]);
    }

    public function delete($id)
    {
        $sql = $this->conexao->prepare("DELETE FROM $this->tabela WHERE id = ?");
        $sql->execute([$id]);

    }
}