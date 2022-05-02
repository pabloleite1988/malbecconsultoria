<?php

/* Classe de PERSISTÊNCIA da classe CLIENTE.
 * Contém métodos para manipulação dos dados no SGBD.
 */

include_once 'Connection.php';
include_once 'Cliente.php';

class ClienteDAO
{
    private $conn;
    
    public function __construct()
    {
        $this->conn = Connection::openConnect();
    }

    public function insert(Cliente $cliente)
    { 
        $sql = "INSERT INTO Cliente(NomeCliente, EndCliente, RendaCliente) VALUES(:NomeCliente, :EndCliente, :RendaCliente)";
        $statement = $this->conn->prepare($sql);           

        $nomeCliente = $cliente->getNomeCliente();
        $endCliente = $cliente->getEndCliente();
        $rendaCliente = $cliente->getRendaCliente();

        $statement->bindParam(":NomeCliente", $nomeCliente);
        $statement->bindParam(":EndCliente", $endCliente);
        $statement->bindParam(":RendaCliente", $rendaCliente);

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            ?>
				
			<!-- Confirmação Inserção Clientes -->
			<form id="ConfirmInclusaoCliente">
			<fieldset><legend> 
				<b>Confirmação Inserção Clientes</b> 
			</legend>
			
				Cliente cadastrado com sucesso!!!
            
			<br>
			
			</fieldset>
			</form>
			
			<?php 
        }else
        {
            echo "Falha na inclusão.";
        }            
    }
    
    public function delete(Cliente $Cliente)
    { 
        $sql = "DELETE FROM Cliente WHERE CodCliente = :CodCliente";
        $statement = $this->conn->prepare($sql);           

        $CodCliente = $Cliente->getCodCliente();        

        $statement->bindParam(":CodCliente", $CodCliente);                   

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            echo "Cliente removido com sucesso.";
        }else
        {
            echo "Falha na exclusão.";
        }            
    }
	
	public function update(Cliente $cliente)
    {         
        $sql = "UPDATE Cliente SET NomeCliente = :nomeCli,  EndCliente = :endCli, RendaCliente = :rendaCli WHERE CodCliente = :codCli";
        $statement = $this->conn->prepare($sql);           
        
        $codCliente = $cliente->getCodCliente();
        $nomeCliente = $cliente->getNomeCliente();
        $endCliente = $cliente->getEndCliente();
        $rendaCliente = $cliente->getRendaCliente();        

        $statement->bindParam(":codCli", $codCliente);        
        $statement->bindParam(":nomeCli", $nomeCliente);        
        $statement->bindParam(":endCli", $endCliente);
        $statement->bindParam(":rendaCli", $rendaCliente);

        $statement->execute();       
    }   
	
	 public function selectAll()
    {
        $sql = "SELECT * FROM Cliente";
        $statement = $this->conn->prepare($sql);                  

        $statement->execute();
        // Retorna um ARRAY DE OBJETOS com os clientes selecionados. 
        return $statement->fetchAll(PDO::FETCH_OBJ);                   
    }    
}