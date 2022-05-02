<?php

/* Arquivo responsável por instanciar os objetos envolvidos na alteração de
 * um curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cliente.php';
include_once 'ClienteDAO.php';

// Recebe os dados do formulário.

$codCli = filter_input(INPUT_GET, "CodCli");
$nomeCli = filter_input(INPUT_GET, "NomeCli");
$endCli = filter_input(INPUT_GET, "EndCli");
$rendaCli = filter_input(INPUT_GET, "RendaCli");

// Instancia os objetos e seta seus atributos.

$cliente = new Cliente();
$cliente->setCodCliente($codCli);
$cliente->setNomeCliente($nomeCli);
$cliente->setEndCliente($endCli);
$cliente->SetRendaCliente($rendaCli);

// Aciona a classe de persistência para manipulação dos dados.

$clienteDAO = new ClienteDAO();
$clienteDAO->update($cliente);

header("Location:Cliente-selectall.php");