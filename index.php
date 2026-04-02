<?php

   require_once __DIR__ . '/Controller/userController.php';

   $controller = new userController();

   $acao = $_GET['acao'] ?? 'index';
   $rotasPermitidas = ['index','listarUsers','cadastrar','inserir','inserirUsers'];

   if (in_array($acao, $rotasPermitidas)) {
      $controller->$acao();
   }
?>