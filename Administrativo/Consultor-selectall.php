<?php

/* Arquivo responsável por instanciar os objetos envolvidos na listagem de
 * Consultors.
 */

// Inclui o arquivo de classe necessário.

include_once 'ConsultorDAO.php';

// Aciona a classe de persistência para manipulação dos dados.

$ConsultorDAO = new ConsultorDAO();
$Consultores = $ConsultorDAO->selectAll();

/* Desenha uma tabela (HTML) para listagem dos cursos.
 * Utiliza como fonte de dados o ARRAY DE OBJETOS retornado na execução do
 * método "selectAll()".
 */

echo "<table border=1";
echo "<tr>";
echo "<th>CódigoConsultor</th>
	  <th>NomeConsultor</th>
	  <th>FormaçãoConsultor</th>
	  <th>EndereçoConsultor</th>
	  <th>Editar</th>";
echo "</tr>";

foreach ($Consultores as $Consultor) {
    echo "<tr>";
    echo "<td>$Consultor->CodConsultor</td>";
    echo "<td>$Consultor->NomeConsultor</td>";
	echo "<td>$Consultor->FormConsultor</td>";
	echo "<td>$Consultor->EndConsultor</td>";
    
    /* Cria na 3ª coluna da tabela um link "Alterar" que encaminhará os dados
     * do curso selecionado ("idcurso" e "nome") ao formulário de alteração de
     * curso ("frmConsultor-update.php").
     */
    echo "<td><a href='Consultores/frmConsultor-update.php?CodConsultor=$Consultor->CodConsultor&"
            . "NomeConsultor=$Consultor->NomeConsultor&" . "FormConsultor=$Consultor->FormConsultor&" . "EndConsultor=$Consultor->EndConsultor'>Alterar</td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='Index.php'>Início";