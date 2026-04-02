<?php 

require_once  __DIR__ . ('/../Models/userModel.php');

class userController{

    private $modelo;

    function __construct()
    {

        $this->modelo = new userModel();

    }

    function index(){
        require_once __DIR__ . '/../View/index.php';
    }
    
    function cadastrar(){
        require_once __DIR__ . '/../View/cadastrarUsers.php';
    }


    

    function inserir()
    { 
        $nome = $_POST['nome']?? null;
        $email = $_POST['email']?? null;
        $telefone = $_POST['telefone']?? null;
        $idade = $_POST['idade']?? null;
        $cidade = $_POST['cidade']?? null;
        $curso = $_POST['curso']?? null;

        $this->modelo->insert($nome,$email,$telefone,$idade,$cidade,$curso);
        require_once __DIR__ . '/../View/index.php';
                   
    }
                

    function listarUsers()
    {

        $resultadoData = $this->modelo->getAll();
        require_once __DIR__ . '/../View/listandoUsers.php';
    
    }

}




?>