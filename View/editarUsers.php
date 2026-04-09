<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <style>
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
    <title>Cadastrar Usuário</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg  bg-primary">
            <div class="container-fluid shadow-sm ">
                <h1 class="navbar-brand ms-2 pb-0 text-light">S.G.U</h1>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class=" collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <ul class=" navbar-nav me-2  mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end ">
                                <li><a href='index.php?acao=cadastrar' class="dropdown-item">Cadastrar</a></li>
                                <li><a href='index.php?acao=listarUsers' class="dropdown-item">Listar<a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        


        <div class='container d-flex justify-content-center shadow-sm min-vh-100 mt-3 px-5 '>
            <div class="w-50 h-25 fundo py-3  rounded border border-grey">

                <h1 class="text-center fs-4">Cadastrando o Usuário</h1>
                
                <form action="./index.php?acao=atualizar" method='POST' class='form'>
                    <fieldset class="px-5 d-flex flex-column gap-2 ">
                        <?php foreach ($resultadoData as $user): ?>
                            <input type="hidden" name="id"  value="<?= $user['id']?>" >

                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $user['nome']?>" class="form-control" >
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="Digite seu email" value="<?= $user['email']?>" class="form-control">
                        
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" placeholder="Digite seu telefone" value="<?= $user['telefone']?>" class="form-control" >
                        
                        <label for="idade">Idade:</label>
                        <input type="number" name="idade" placeholder="Digite sua idade" value="<?= $user['idade']?>" class="form-control">
                        
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" placeholder="Digite sua cidade" value="<?= $user['cidade']?>" class="form-control">
                        
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" placeholder="Digite seu curso" value="<?= $user['curso']?>" class="form-control" >
                        
                        <div class="d-grid ">
                            <button class="btn btn-outline-primary mt-2">Atualizar</button>
                        </div>
                        <a class="btn btn-outline-danger" href="index.php?acao='index'">Voltar</a>
                        <?php endforeach; ?>
                    </fieldset>
                            
                            
                            
                </form>
                        
                        
                        
            </div>
            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>