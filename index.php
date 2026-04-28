<?php

require_once __DIR__ . '/Controller/userController.php';
require_once __DIR__ . '/Controller/notasController.php';

$acao = $_GET['acao'] ?? 'index';

$rotasNotas = ['notas','notasCadastrar','notasSalvar','notasEditar','notasAtualizar','notasDeletar'];
$rotasUsuarios = ['index','listarUsers','cadastrar','inserir','excluirUser','listarID','atualizar'];

if (in_array($acao, $rotasNotas)) {
    $controller = new notasController();
} else {
    $controller = new userController();
}

if (in_array($acao, array_merge($rotasNotas, $rotasUsuarios))) {
    $controller->$acao();
}


   
?>