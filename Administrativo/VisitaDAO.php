<?php

include_once 'Connection.php';
include_once 'Visita.php';

class VisitaDAO {
    
    public $conn;
    
    public function __construct() {
        $this->conn = Connection::openConnect();
    }

    
    public function insert(Visita $visita){
        $sql = "INSERT INTO visita(CodConsultor, CodSolicitacao, DescVisita, HorarioAgendado, DataAgendada) VALUES(:CodConsultor, :CodSolicitacao, :DescVisita, :HorarioAgendado, :DataAgendada)";
        $statement = $this->conn->prepare($sql);           
		
		
		$CodConsultor = $visita->getConsultor()->getCodConsultor();
        $CodSolicitacao = $visita->getAtendimento()->getCodSolicitacao();
        $DescVisita = $visita->getDescVisita();
		$HorarioAgendado = $visita->getHorarioAgendado();
		$DataAgendada = $visita->getDataAgendada();

        $statement->bindParam(":CodConsultor", $CodConsultor);        
        $statement->bindParam(":CodSolicitacao", $CodSolicitacao);        
		$statement->bindParam(":DescVisita", $DescVisita);
		$statement->bindParam(":HorarioAgendado", $HorarioAgendado);
		$statement->bindParam(":DataAgendada", $DataAgendada);

        $statement->execute();
        
        if ($statement->rowCount() > 0){
            echo "Visita efetuada com sucesso.";
        }else{
            echo "Falha ao cadastrar.";
        }            
    }
	
	
    public function update(Visita $visita)
    {         
        $sql = "UPDATE visita SET CodConsultor = :CodConsultor, CodSolicitacao = :CodSolicitacao, DescVisita = :DescVisita, HorarioAgendado = :HorarioAgendado, DataAgendada = :DataAgendada WHERE CodVisita = :CodVisita";
        $statement = $this->conn->prepare($sql);           
        
		$CodConsultor = $visita->getConsultor->getCodConsultor();
        $CodSolicitacao = $visita->getAtendimento()->getCodSolicitacao();
        $DescVisita = $visita->getDescVisita();
		$HorarioAgendado = $visita->getHorarioAgendado();
		$DataAgendada = $visita->getDataAgendada();

        $statement->bindParam(":CodConsultor", $CodConsultor);        
        $statement->bindParam(":CodSolicitacao", $CodSolicitacao);        
		$statement->bindParam(":DescVisita", $DescVisita);
		$statement->bindParam(":HorarioAgendado", $HorarioAgendado);
		$statement->bindParam(":DataAgendada", $DataAgendada);

        $statement->execute();       
    }   
	
	 public function delete(Visita $visita)
    { 
        $sql = "DELETE FROM visita WHERE CodVisita = :CodVisita";
        $statement = $this->conn->prepare($sql);           

        $CodVisita = $visita->getCodVisita();        

        $statement->bindParam(":CodVisita", $CodVisita);                   

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            echo "Visita removida com sucesso.";
        }else
        {
            echo "Falha na exclusão.";
        }            
    }
    
    
    public function allUsers(){
        $sql = "SELECT * FROM visita";
        $statement = $this->conn->prepare($sql);                  

        $statement->execute();
        // Retorna um ARRAY DE OBJETOS com os clientes selecionados. 
        return $statement->fetchAll(PDO::FETCH_OBJ);                   
    }
}