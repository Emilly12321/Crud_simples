<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Notas dos Alunos</title>

    <style>
        body {
            background-color: rgb(248, 251, 255);
        }
    </style>
</head>
<body>

<?php include 'src/Components/navbar.php';

?>

<div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
                <h2>Notas dos Alunos</h2>
                <a href="index.php?acao=notasCadastrar" class="btn btn-primary">Nova Nota</a>
            </div>

            <div class="bg-white p-3 rounded shadow-sm">

            <div class="row mb-3 text-center">

            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6>Total</h6>
                        <h4><?= $resumo['total_lancamentos'] ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6>Maior Média</h6>
                        <h4><?= number_format($resumo['maior_media'], 2) ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6>Menor Média</h6>
                        <h4><?= number_format($resumo['menor_media'], 2) ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6>Média Geral</h6>
                        <h4><?= number_format($resumo['media_geral'], 2) ?></h4>
                    </div>
                </div>
            </div>

        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Bimestre</th>
                    <th>N1</th>
                    <th>N2</th>
                    <th>N3</th>
                    <th>Soma</th>
                    <th>Média</th>
                    <th>Média Ponderada</th>
                    <th>Faltas</th>
                    <th>Situação</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultadoData as $nota): 

                    $media = $nota['media_simples'];
                    $faltas = $nota['faltas'];

                    if ($media >= 7 && $faltas <= 10) {
                        $situacao = "Aprovado";
                        $classe = "text-success";
                    } elseif ($media >= 5) {
                        $situacao = "Recuperação";
                        $classe = "text-warning";
                    } else {
                        $situacao = "Reprovado";
                        $classe = "text-danger";
                    }
                ?>

                <tr>
                    <td><?= $nota['nome'] ?></td>
                    <td><?= $nota['bimestre'] ?></td>
                    <td><?= $nota['nota1'] ?></td>
                    <td><?= $nota['nota2'] ?></td>
                    <td><?= $nota['nota3'] ?></td>
                    <td><?= number_format($nota['soma_notas'], 2) ?></td>
                    <td><?= number_format($nota['media_simples'], 2) ?></td>
                    <td><?= number_format($nota['media_ponderada'], 2) ?></td>
                    <td><?= $nota['faltas'] ?></td>
                    <td class="<?= $classe ?>"><strong><?= $situacao ?></strong></td>
                    <td>
                        <a href="index.php?acao=notasEditar&id=<?= $nota['id'] ?>" class="text-warning text-decoration-none">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        |
                        <a href="index.php?acao=notasDeletar&id=<?= $nota['id'] ?>"
                        class="text-danger text-decoration-none" onclick="return confirm('Deseja realmente excluir?')">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>

                </tr>

                <?php endforeach; ?>
            </tbody>

        </table>

        <div class="d-grid">
            <a href="index.php" class="btn btn-outline-danger">Voltar</a>
        </div>

    </div>

</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>