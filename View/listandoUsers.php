<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color:rgb(248, 251, 255);
            height: 100%;
            
        }
        .fundo{
            background-color:#FFFF;
            color: rgb(56, 56, 56);
        }

    </style>
    <title>Listando Usuários</title>
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1 class="navbar-brand ms-2" href="#">S.G.U</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end">
                        <li><a href='index.php?acao=cadastrar' class="dropdown-item">Cadastrar</a></li>
                        <li><a href='index.php?acao=listarUsers' class="dropdown-item disabled">Listar<a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container d-flex flex-column align-items-center mt-5">
                <h1>Listando Usuários</h1>
        <div class="w-100 fundo px-2 py-3 rounded shadow-sm">
            
            <table class="table text-center">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>IDADE</th>
                    <th>TELEFONE</th>
                    <th>CIDADE</th>
                    <th>CURSO</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultadoData as $user): ?>
                    
                    <tr>
                        <td> <?php echo $user['id']  ?> </td>
                        <td><?php echo $user['nome']  ?> </td>
                        <td><?php echo $user['email']  ?> </td>
                        <td><?php echo $user['idade']  ?> </td>
                        <td><?php echo $user['telefone']  ?> </td>
                        <td><?php echo $user['cidade']  ?> </td>
                        <td><?php echo $user['curso']  ?> </td>
                        <td>
                            <a href="./index.php?acao=listarID&id=<?=$user['id']?>">Editar</a> |
                            <a href="./index.php?acao=excluirUser&&id=<?=$user['id']?>">Excluir</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div class="d-grid mx-auto">
                <a href="index.php?acao=index" class="btn btn-primary" >Voltar</a>
            </div>
            
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>