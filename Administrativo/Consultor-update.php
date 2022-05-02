<?php

/* Arquivo responsável por instanciar os objetos envolvidos na alteração de
 * um curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Consultor.php';
include_once 'ConsultorDAO.php';

// Recebe os dados do formulário.

$codConsultor = filter_input(INPUT_GET, "CodConsultor");
$nomeConsultor = filter_input(INPUT_GET, "NomeConsultor");
$formConsultor = filter_input(INPUT_GET, "FormConsultor");
$endConsultor = filter_input(INPUT_GET, "EndConsultor");

// Instancia os objetos e seta seus atributos.

$Consultor = new Consultor();
$Consultor->setCodConsultor($codConsultor);
$Consultor->setNomeConsultor($nomeConsultor);
$Consultor->setFormConsultor($formConsultor);
$Consultor->SetEndConsultor($endConsultor);

// Aciona a classe de persistência para manipulação dos dados.

$ConsultorDAO = new ConsultorDAO();
$ConsultorDAO->update($Consultor);

header("Location:Consultor-selectall.php");