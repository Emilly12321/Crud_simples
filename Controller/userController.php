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
    function listarID()
    {
        $id = $_GET['id'] ?? "";
        $resultadoData = $this->modelo->getByID($id);
        require_once __DIR__ . '/../View/editarUsers.php';
    
    }

    function atualizar(){

        $id = $_POST['id'] ?? "";
        $nome = $_POST['nome'] ?? "";
        $email = $_POST['email'] ?? "";
        $telefone = $_POST['telefone'] ?? "";
        $idade = $_POST['idade'] ?? "";
        $cidade = $_POST['cidade'] ?? "";
        $curso = $_POST['curso'] ?? "";

        $resultadoData = $this->modelo->updateUser($id,$nome,$email,$telefone,$idade,$cidade,$curso);
        header("Location: index.php?acao=listarUsers");
        exit;
   

    }

    function excluirUser()
    {
        $id = $_GET['id'] ?? "";
        $resultadoData = $this->modelo->delete($id);
        header("Location: index.php?acao=listarUsers");
        exit;    
    }



}




?>