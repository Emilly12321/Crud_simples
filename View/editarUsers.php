<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <style>
       body {
            background-color:rgb(248, 251, 255);
            
        }
        .fundo{
            background-color:#FFFF;
            color: rgb(56, 56, 56);
        }

        label{
            font-size: 16px;
            color:rgb(54, 54, 54);
        }
    </style>
    <title>Cadastrar Usuário</title>
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
        
    <div class='container d-flex justify-content-center  min-vh-100 align-items-center px-5'>
            <div class="w-50 fundo py-3 rounded border border-grey  shadow-sm">

                <h1 class="text-center ">Cadastrando o Usuário</h1>
                
                <form action="index.php?acao=atualizar" method='POST' class='form gap-5 '>
                    <fieldset class="px-5 d-flex flex-column gap-2 ">
                        <?php foreach ($resultadoData as $user): ?>

                        <input type="hidden" name="id" value="<?= $user['id'] ?>">

                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $user['nome'] ?>" class="form-control" >
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="Digite seu email" value="<?= $user['email'] ?>" class="form-control">
                        
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" placeholder="Digite seu telefone" value="<?= $user['telefone'] ?>" class="form-control" >
                        
                        <label for="idade">Idade:</label>
                        <input type="number" name="idade" placeholder="Digite sua idade" value="<?= $user['idade'] ?>" class="form-control">
                        
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" placeholder="Digite sua cidade" value="<?= $user['cidade'] ?>" class="form-control">
                        
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" placeholder="Digite seu curso" value="<?= $user['curso'] ?>" class="form-control" >
                        
                        <?php endforeach; ?>

                        <button class="btn btn-outline-primary mt-2">Atualizar</button>
                        <a class="btn btn-phill" href="index.php?a='index'">Voltar</a>

                            
                    </fieldset>
                            
                            
                            
                </form>
                        
                        
                        
            </div>
            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>