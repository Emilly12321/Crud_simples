<?php

require_once __DIR__ . '/../Models/notasModel.php';

class notasController {

    private $modelo;

    function __construct()
    {
        $this->modelo = new notasModel();
    }

    function index()
    {
        $resultadoData = $this->modelo->getAll();
        require_once __DIR__ . '/../View/notasListar.php';
    }

    function notasCadastrar()
    {
        $alunos = $this->modelo->getAlunos();
        require_once __DIR__ . '/../View/notasCadastrar.php';
    }

    function notasSalvar()
    {
        $aluno_id = $_POST['aluno_id'] ?? null;
        $bimestre = $_POST['bimestre'] ?? null;
        $nota1 = $_POST['nota1'] ?? 0;
        $nota2 = $_POST['nota2'] ?? 0;
        $nota3 = $_POST['nota3'] ?? 0;
        $peso = $_POST['peso'] ?? 1;
        $faltas = $_POST['faltas'] ?? 0;

        $this->modelo->insert($aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas);

        header("Location: index.php?acao=notas");
        exit;
    }

    function notas()
    {
        $resultadoData = $this->modelo->getAll();
        $resumo = $this->modelo->getResumo();

        require_once __DIR__ . '/../View/notasListar.php';

    }

    function notasEditar()
    {
        $id = $_GET['id'] ?? null;

        $nota = $this->modelo->getByID($id);
        $alunos = $this->modelo->getAlunos();

        require_once __DIR__ . '/../View/notasEditar.php';
    }

    function notasAtualizar()
    {
        $id = $_POST['id'];
        $aluno_id = $_POST['aluno_id'];
        $bimestre = $_POST['bimestre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $peso = $_POST['peso'];
        $faltas = $_POST['faltas'];

        $this->modelo->update($id, $aluno_id, $bimestre, $nota1, $nota2, $nota3, $peso, $faltas);

        header("Location: index.php?acao=notas");
        exit;
    }

    function notasDeletar()
    {
        $id = $_GET['id'] ?? null;

        $this->modelo->delete($id);

        header("Location: index.php?acao=notas");
        exit;
    }
}