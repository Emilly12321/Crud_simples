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
        <?php 
            include 'src\Components\navbar.php';
        ?>
        <div class="container mt-5">

            <div class="p-5 mb-4">
                <div class="container-fluid py-5">
                
                <h1 class="display-4 fw-bold text-center pb-2">Sistema de Gerenciamento de Usuários e Notas</h1>

                <hr>
                
                <p class="col-md-8 fs-5 w-auto text-justify">
                    Aplicação desenvolvida para gerenciar usuários e acompanhar o desempenho acadêmico dos alunos, seguindo o padrão CRUD (Create, Read, Update, Delete).

                    O sistema permite cadastrar e administrar usuários, registrar notas por bimestre, calcular médias automaticamente e classificar os alunos conforme seu desempenho, além de exibir relatórios gerais da turma.  

                </p>

                

                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    </html>