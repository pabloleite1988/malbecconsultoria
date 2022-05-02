<?php

/* Arquivo responsável por instanciar os objetos envolvidos na listagem de
 * cursos.
 */

// Inclui o arquivo de classe necessário.

include_once 'CursoDAO.php';

// Aciona a classe de persistência para manipulação dos dados.

$cursoDAO = new CursoDAO();
$curso = $cursoDAO->selectAll();

/* Desenha uma tabela (HTML) para listagem dos cursos.
 * Utiliza como fonte de dados o ARRAY DE OBJETOS retornado na execução do
 * método "selectAll()".
 */

echo "<table border=1";
echo "<tr>";
echo "<th>Codcurso</th><th>NomeCurso</th><th>DescCurso</th><th>Agenda</th><th>Editar</th>";
echo "</tr>";

foreach ($curso as $Cursos) {
    echo "<tr>";
    echo "<td>$Cursos->CodCurso</td>";
    echo "<td>$Cursos->NomeCurso</td>";
	echo "<td>$Cursos->DescCurso</td>";
	echo "<td>$Cursos->Agenda</td>";
	
    
    /* Cria na 3ª coluna da tabela um link "Alterar" que encaminhará os dados
     * do curso selecionado ("idcurso" e "nome") ao formulário de alteração de
     * curso ("frmCurso-update.php").
     */
    echo "<td><a href='frmCurso-update.php?
			CodCurso=$Cursos->CodCurso&"
           ."NomeCurso=$Cursos->NomeCurso&"
		   ."DescCurso=$Cursos->DescCurso&"
		   ."Agenda=$Cursos->Agenda'>
		   Alterar</td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='Index.php'>Início";