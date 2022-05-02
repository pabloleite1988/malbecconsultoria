<?php

/* Arquivo responsável por instanciar os objetos envolvidos na exclusão de
 * um Consultor.
 */

// Inclui os arquivos de classe necessários.

include_once 'Consultor.php';
include_once 'ConsultorDAO.php';

// Recebe os dados do formulário.

$CodConsultor = filter_input(INPUT_GET, "CodConsultor");

// Instancia os objetos e seta seus atributos.

$consultor = new Consultor();
$consultor->setCodConsultor($CodConsultor);

// Aciona a classe de persistência para manipulação dos dados.

$consultorDAO = new ConsultorDAO();
$consultorDAO->delete($consultor);

echo "<br><a href='Index.php'>Início</a>";