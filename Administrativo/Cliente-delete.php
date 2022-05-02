<?php

/* Arquivo responsável por instanciar os objetos envolvidos na exclusão de
 * um Cliente.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cliente.php';
include_once 'ClienteDAO.php';

// Recebe os dados do formulário.

$codCliente = filter_input(INPUT_GET, "codCli");

// Instancia os objetos e seta seus atributos.

$cliente = new Cliente();
$cliente->setCodCliente($codCli);

// Aciona a classe de persistência para manipulação dos dados.

$clienteDAO = new ClienteDAO();
$clienteDAO->delete($cliente);

echo "<br><a href='Index.php'>Início</a>";