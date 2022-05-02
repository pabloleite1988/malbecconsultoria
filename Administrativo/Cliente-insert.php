<?php

/* Arquivo responsável por instanciar os objetos envolvidos na inclusão de
 * um novo curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cliente.php';
include_once 'ClienteDAO.php';
include_once 'Cursos.php';

// Recebe os dados do formulário.

$nomeCliente = filter_input(INPUT_GET, "nomeCli");
$enderecoCliente = filter_input(INPUT_GET, "endCli");
$rendaCliente = filter_input(INPUT_GET, "rendaCli");

// Instancia os objetos e seta seus atributos.

$cliente = new Cliente();
$cliente->setNomeCliente($nomeCliente);
$cliente->setEndCliente($enderecoCliente);
$cliente->setRendaCliente($rendaCliente);

// Aciona a classe de persistência para manipulação dos dados.

$clienteDAO = new ClienteDAO();
$clienteDAO->insert($cliente);

echo "<br><a href='Index.php'>Início</a>";