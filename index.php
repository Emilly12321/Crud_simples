<?php

   require_once __DIR__ . '/Controller/userController.php';

   $controller = new userController();

   $acao = $_GET['acao'] ?? 'index';
   $rotasPermitidas = ['index','listarUsers','cadastrar','inserir','inserirUsers','excluirUser','listarID','atualizar'];

   if (in_array($acao, $rotasPermitidas)) {
      $controller->$acao();
   }
?>