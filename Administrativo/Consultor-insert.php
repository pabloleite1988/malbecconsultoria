<?php

/* Arquivo responsável por instanciar os objetos envolvidos na inclusão de
 * um novo consultor.
 */

// Inclui os arquivos de classe necessários.

include_once 'Consultor.php';
include_once 'ConsultorDAO.php';
include_once 'Cursos.php';

// Recebe os dados do formulário.

$nomeConsultor = filter_input(INPUT_GET, "nomeCons");
$formConsultor = filter_input(INPUT_GET, "formCons");
$endConsultor = filter_input(INPUT_GET, "endCons");

// Instancia os objetos e seta seus atributos.

$consultor = new Consultor();
$consultor->setNomeConsultor($nomeConsultor);
$consultor->setFormConsultor($formConsultor);
$consultor->setEndConsultor($endConsultor);

// Aciona a classe de persistência para manipulação dos dados.

$consultorDAO = new ConsultorDAO();
$consultorDAO->insert($consultor);

echo "<br><a href='Index.php'>Início</a>";