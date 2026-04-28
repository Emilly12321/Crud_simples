<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastrar Notas</title>

    <style>
        body {
            background-color: rgb(248, 251, 255);
        }
        .fundo {
            background-color: #fff;
        }
    </style>
</head>
<body>

<?php 
    include 'src/Components/navbar.php'; 
?>

<div class="container d-flex justify-content-center mt-4">
    <div class="w-50 fundo p-4 rounded shadow-sm">

        <h2 class="text-center mb-3">Cadastrar Notas</h2>

        <form action="index.php?acao=notasSalvar" method="POST">
            
            <label>Aluno:</label>
            <select name="aluno_id" class="form-control mb-2" required>
                <option value="">Selecione</option>
                <?php foreach ($alunos as $aluno): ?>
                    <option value="<?= $aluno['id'] ?>">
                        <?= $aluno['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Bimestre:</label>
            <input type="text" name="bimestre" class="form-control mb-2" required>
            <div class="row mb-2">

                <div class="col-md-4">
                    <label>Nota 1:</label>
                    <input type="number" step="0.01" name="nota1" class="form-control">
                </div>

                <div class="col-md-4">
                    <label>Nota 2:</label>
                    <input type="number" step="0.01" name="nota2" class="form-control">
                </div>

                <div class="col-md-4">
                    <label>Nota 3:</label>
                    <input type="number" step="0.01" name="nota3" class="form-control">
                </div>

            </div>

            <label>Peso:</label>
            <input type="number" step="0.01" name="peso" value="1" class="form-control mb-2">

            <label>Faltas:</label>
            <input type="number" name="faltas" value="0" class="form-control mb-3">

            <div class="d-grid">
                <button class="btn btn-outline-primary">Salvar</button>
            </div>

            <a href="index.php?acao=notas" class="btn btn-outline-danger mt-2 w-100">Voltar</a>

        </form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>