<?php

/* Arquivo responsável por instanciar os objetos envolvidos na inclusão de
 * um novo curso.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cursos.php';
include_once 'CursoDAO.php';

// Recebe os dados do formulário.

$nomeCurso = filter_input(INPUT_GET, "NomeCurso");
$descCurso = filter_input(INPUT_GET, "DescCurso");
$agenda = filter_input(INPUT_GET, "Agenda");

// Instancia os objetos e seta seus atributos.

$cursos = new Cursos();
$cursos->setNomeCurso($nomeCurso);
$cursos->setDescCurso($descCurso);
$cursos->setAgenda($agenda);

// Aciona a classe de persistência para manipulação dos dados.

$cursoDAO = new CursoDAO();
$cursoDAO->insert($cursos);

echo "<br><a href='Index.php'>Início</a>";