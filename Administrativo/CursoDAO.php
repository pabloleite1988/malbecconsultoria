<?php

/* Classe de PERSISTÊNCIA da classe CURSO.
 * Contém métodos para manipulação dos dados no SGBD.
 */

include_once 'Connection.php';
include_once 'Cursos.php';

class CursoDAO
{
    private $conn;
    
    public function __construct()
    {
        $this->conn = Connection::openConnect();
    }    
    
    public function insert(Cursos $cursos)
    {         
        $sql = "INSERT INTO Cursos(NomeCurso, DescCurso, Agenda) VALUES(:NomeCurso, :DescCurso, :Agenda)";
        $statement = $this->conn->prepare($sql);           
        
        $nomeCurso = $cursos->getNomeCurso();
        $descCurso = $cursos->getDescCurso();
		$agenda = $cursos->getAgenda();

        $statement->bindParam(":NomeCurso", $nomeCurso);        
        $statement->bindParam(":DescCurso", $descCurso);
		$statement->bindParam(":Agenda", $agenda);	

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            echo "Curso incluído com sucesso.";
        }else
        {
            echo "Falha na inclusão.";
        }            
    }
    
    public function update(Cursos $curso)
    {         
        $sql = "UPDATE Cursos SET NomeCurso = :NomeCurso, DescCurso = :DescCurso, Agenda = :Agenda WHERE CodCurso = :CodCurso";
        $statement = $this->conn->prepare($sql);           
        
        $CodCurso = $curso->getCodCurso();
        $NomeCurso = $curso->getNomeCurso();
		$DescCurso = $curso->getDescCurso();
		$Agenda = $curso->getAgenda();	

        $statement->bindParam(":CodCurso", $CodCurso);        
        $statement->bindParam(":NomeCurso", $NomeCurso);
		$statement->bindParam(":DescCurso", $DescCurso);
		$statement->bindParam(":Agenda", $Agenda);	

        $statement->execute();       
    }   
	
	 public function delete(Cursos $Cursos)
    { 
        $sql = "DELETE FROM Cursos WHERE CodCurso = :CodCurso";
        $statement = $this->conn->prepare($sql);           

        $CodCurso = $Cursos->getCodCurso();        

        $statement->bindParam(":CodCurso", $CodCurso);                   

        $statement->execute();
        
        if ($statement->rowCount() > 0)
        {
            echo "Curso removido com sucesso.";
        }else
        {
            echo "Falha na exclusão.";
        }            
    }
    
    public function selectAll()
    {
        $sql = "SELECT * FROM Cursos";
        $statement = $this->conn->prepare($sql);                  

        $statement->execute();
        // Retorna um ARRAY DE OBJETOS com os cursos selecionados. 
        return $statement->fetchAll(PDO::FETCH_OBJ);                   
    }    
}