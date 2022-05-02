<?php

/* Arquivo responsável por instanciar os objetos envolvidos na alteração de
 * um curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cursos.php';
include_once 'CursoDAO.php';

// Recebe os dados do formulário.

$CodCurso = filter_input(INPUT_GET, "CodCurso");
$NomeCurso = filter_input(INPUT_GET, "NomeCurso");
$DescCurso = filter_input(INPUT_GET, "DescCurso");
$Agenda = filter_input(INPUT_GET, "Agenda");

// Instancia os objetos e seta seus atributos.

$curso = new Cursos();
$curso->setCodCurso($CodCurso);
$curso->setNomeCurso($NomeCurso);
$curso->setDescCurso($DescCurso);
$curso->setAgenda($Agenda);

// Aciona a classe de persistência para manipulação dos dados.

$cursoDAO = new CursoDAO();
$cursoDAO->update($curso);

header("Location:Cursos-selectall.php");