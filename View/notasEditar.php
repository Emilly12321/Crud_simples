<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Nota</title>
</head>
<body>

<?php include 'src/Components/navbar.php'; ?>

<div class="container mt-4 d-flex justify-content-center">
    <div class="w-50 bg-white p-4 shadow-sm rounded">

        <h3 class="text-center">Editar Nota</h3>

        <form action="index.php?acao=notasAtualizar" method="POST">

            <input type="hidden" name="id" value="<?= $nota['id'] ?>">

            <label>Aluno:</label>
            <select name="aluno_id" class="form-control mb-2">
                <?php foreach ($alunos as $aluno): ?>
                    <option value="<?= $aluno['id'] ?>"
                        <?= $aluno['id'] == $nota['aluno_id'] ? 'selected' : '' ?>>
                        <?= $aluno['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Bimestre:</label>
            <input type="text" name="bimestre" value="<?= $nota['bimestre'] ?>" class="form-control mb-2">

            <label>Nota 1:</label>
            <input type="number" step="0.01" name="nota1" value="<?= $nota['nota1'] ?>" class="form-control mb-2">

            <label>Nota 2:</label>
            <input type="number" step="0.01" name="nota2" value="<?= $nota['nota2'] ?>" class="form-control mb-2">

            <label>Nota 3:</label>
            <input type="number" step="0.01" name="nota3" value="<?= $nota['nota3'] ?>" class="form-control mb-2">

            <label>Peso:</label>
            <input type="number" step="0.01" name="peso" value="<?= $nota['peso'] ?>" class="form-control mb-2">

            <label>Faltas:</label>
            <input type="number" name="faltas" value="<?= $nota['faltas'] ?>" class="form-control mb-3">

            <button class="btn btn-primary w-100">Atualizar</button>
            <a href="index.php?acao=notas" class="btn btn-danger w-100 mt-2">Voltar</a>

        </form>
    </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>