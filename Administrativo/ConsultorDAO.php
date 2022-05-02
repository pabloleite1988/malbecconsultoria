<?php

/* Classe de PERSISTÊNCIA da classe Consultor.
 * Contém métodos para manipulação dos dados no SGBD.
 */

include_once 'Connection.php';
include_once 'Consultor.php';

class ConsultorDAO
{
    private $conn;
    
    public function __construct()
    {
        $this->conn = Connection::openConnect();
    }

    public function insert(Consultor $Consultor)
    { 
        $sql = "INSERT INTO consultor(NomeConsultor, FormConsultor, EndConsultor) VALUES(:NomeConsultor, :FormConsultor, :EndConsultor)";
        $statement = $this->conn->prepare($sql);           

        $nomeConsultor = $Consultor->getNomeConsultor();
        $formConsultor = $Consultor->getFormConsultor();
        $endConsultor = $Consultor->getEndConsultor();

        $statement->bindParam(":NomeConsultor", $nomeConsultor);
        $statement->bindParam(":FormConsultor", $formConsultor);
        $statement->bindParam(":EndConsultor", $endConsultor);

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            ?>
				
			<!-- Confirmação Inserção Consultors -->
			<form id="ConfirmInclusaoConsultor">
			<fieldset><legend> 
				<b>Confirmação Inserção Consultores</b> 
			</legend>
			
				Consultor cadastrado com sucesso!!!
            
			<br>
			
			</fieldset>
			</form>
			
			<?php 
        }else
        {
            echo "Falha na inclusão.";
        }            
    }
    
    public function delete(Consultor $Consultor)
    { 
        $sql = "DELETE FROM consultor WHERE CodConsultor = :CodConsultor";
        $statement = $this->conn->prepare($sql);           

        $CodConsultor = $Consultor->getCodConsultor();        

        $statement->bindParam(":CodConsultor", $CodConsultor);                   

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            echo "Consultor removido com sucesso.";
        }else
        {
            echo "Falha na exclusão.";
        }            
    }
	
	public function update(Consultor $Consultor)
    {         
        $sql = "UPDATE consultor SET NomeConsultor = :nomeCons,  FormConsultor = :formCons, EndConsultor = :endCons WHERE CodConsultor = :codCons";
        $statement = $this->conn->prepare($sql);           
        
        $codConsultor = $Consultor->getCodConsultor();
        $nomeConsultor = $Consultor->getNomeConsultor();
        $formConsultor = $Consultor->getFormConsultor();
        $endConsultor = $Consultor->getEndConsultor();        

        $statement->bindParam(":codCons", $codConsultor);        
        $statement->bindParam(":nomeCons", $nomeConsultor);        
        $statement->bindParam(":formCons", $formConsultor);
        $statement->bindParam(":endCons", $endConsultor);

        $statement->execute();       
    }   
	
	 public function selectAll()
    {
        $sql = "SELECT * FROM consultor";
        $statement = $this->conn->prepare($sql);                  

        $statement->execute();
        // Retorna um ARRAY DE OBJETOS com os Consultors selecionados. 
        return $statement->fetchAll(PDO::FETCH_OBJ);                   
    }    
}