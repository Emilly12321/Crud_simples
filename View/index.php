    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Crud_simples</title>

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
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
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
        <div class="container mt-5">

            <div class="p-5 mb-4">
                <div class="container-fluid py-5">
                
                <h1 class="display-5 fw-bold text-center pb-2">Sistema de Gerenciamento de Usuários</h1>

                <hr>
                
                <p class="col-md-8 fs-5 w-auto text-justify">
                    Bem-vindo ao sistema de gerenciamento de usuários. Esta aplicação foi desenvolvida com o objetivo de oferecer uma forma prática, organizada e eficiente de administrar dados de usuários em um único ambiente. Tudo isso seguindo o padrão CRUD ( <strong>Create</strong>, <strong>Read</strong>, <strong>Update</strong>, <strong>Delete</strong> ), amplamente utilizado no desenvolvimento de sistemas.
  
                </p>

                

                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    </html>