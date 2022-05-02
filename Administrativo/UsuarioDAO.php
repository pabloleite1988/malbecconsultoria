<?php

include_once 'Connection.php';
include_once 'Usuario.php';

class UsuarioDAO {
    
    public $conn;
    
    public function __construct() {
        $this->conn = Connection::openConnect();
    }

    public function doLogin(Usuario $usuario){ 
        $sql = "SELECT NomeUsuario FROM usuarios WHERE NomeUsuario = :NomeUsuario AND SenhaUsuario = :SenhaUsuario";
        $statement = $this->conn->prepare($sql);           

        $Nome = $usuario->getNomeUsuario();
        $SenhaUsuario = $usuario->getSenhaUsuario();

        $statement->bindParam(":NomeUsuario", $Nome);        
        $statement->bindParam(":SenhaUsuario", $SenhaUsuario);
        

        $statement->execute();
        
        if ($statement->rowCount() > 0){
            echo "Login efetuado com sucesso.";
			echo "<br>";
			echo "<a href='Index.php'>Painel Administrativo</a>";
		
        }else{
            echo "Dados incorretos.";
        }            
    }
    
    public function insert(Usuario $usuario){
        $sql = "INSERT INTO usuarios(NomeUsuario, SenhaUsuario) VALUES(:NomeUsuario, :SenhaUsuario)";
        $statement = $this->conn->prepare($sql);           

        $NomeUsuario = $usuario->getNomeUsuario();
        $SenhaUsuario = $usuario->getSenhaUsuario();

        $statement->bindParam(":NomeUsuario", $NomeUsuario);        
        $statement->bindParam(":Senha", $Senha);

        $statement->execute();
        
        if ($statement->rowCount() > 0){
            echo "Cadastro efetuado com sucesso.";
        }else{
            echo "Falha ao cadastrar.";
        }            
    }
    
    public function allUsers(){
        $sql = "SELECT * FROM usuarios";
        $statement = $this->conn->prepare($sql);                  

        $statement->execute();
        // Retorna um ARRAY DE OBJETOS com os clientes selecionados. 
        return $statement->fetchAll(PDO::FETCH_OBJ);                   
    }
}