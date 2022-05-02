<?php

/* Arquivo responsável por instanciar os objetos envolvidos na listagem de
 * clientes.
 */

// Inclui o arquivo de classe necessário.

include_once 'ClienteDAO.php';

// Aciona a classe de persistência para manipulação dos dados.

$clienteDAO = new ClienteDAO();
$clientes = $clienteDAO->selectAll();

/* Desenha uma tabela (HTML) para listagem dos cursos.
 * Utiliza como fonte de dados o ARRAY DE OBJETOS retornado na execução do
 * método "selectAll()".
 */

echo "<table border=1";
echo "<tr>";
echo "<th>CódigoCliente</th>
	  <th>NomeCliente</th>
	  <th>EndereçoCliente</th>
	  <th>RendaCliente</th>
	  <th>Editar</th>";
echo "</tr>";

foreach ($clientes as $cliente) {
    echo "<tr>";
    echo "<td>$cliente->CodCliente</td>";
    echo "<td>$cliente->NomeCliente</td>";
	echo "<td>$cliente->EndCliente</td>";
	echo "<td>$cliente->RendaCliente</td>";
    
    /* Cria na 3ª coluna da tabela um link "Alterar" que encaminhará os dados
     * do curso selecionado ("idcurso" e "nome") ao formulário de alteração de
     * curso ("frmCliente-update.php").
     */
    echo "<td><a href='frmCliente-update.php?CodCliente=$cliente->CodCliente&"
            . "NomeCliente=$cliente->NomeCliente&" . "EndCliente=$cliente->EndCliente&" . "RendaCliente=$cliente->RendaCliente'>Alterar</td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='Index.php'>Início";