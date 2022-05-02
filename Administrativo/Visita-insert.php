<?php

/* Arquivo responsável por instanciar os objetos envolvidos na inclusão de
 * um novo curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Visita.php';
include_once 'VisitaDAO.php';
include_once 'Atendimento.php';
include_once 'Consultor.php';

// Recebe os dados do formulário.

$CodigoConsultor = filter_input(INPUT_GET, "CodCons");
$CodigoSolicitacao = filter_input(INPUT_GET, "CodSol");
$DescVisita = filter_input(INPUT_GET, "descVis");
$HorarioAgendado = filter_input(INPUT_GET, "HorarioAgendado");
$DataAgenda = filter_input(INPUT_GET, "DataAgenda");

// Instancia os objetos e seta seus atributos.
$visita = new Visita();

$consultor = new Consultor();
$consultor->setCodConsultor($CodigoConsultor);
$visita->setConsultor($consultor);

$atendimento = new Atendimento();
$atendimento->setCodSolicitacao($CodigoSolicitacao);
$visita->setAtendimento($atendimento);

$visita->setDescVisita($DescVisita);
$visita->setHorarioAgendado($HorarioAgendado);
$visita->setDataAgendada($DataAgenda);

$visitaDAO = new VisitaDAO();
$visitaDAO->insert($visita);

echo "<br><a href='Index.php'>Início</a>";